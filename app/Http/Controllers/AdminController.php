<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;
use PDF;
use Dompdf\Dompdf;
use Yajra\DataTables\Facades\DataTables;




class AdminController extends Controller
{

    public function getSubcategories(Request $request)
    {
        if (session::has('id')) {
            $category_id = $request->input('category_id');
            $subcategories = DB::table('sub_categories')
                ->where('cat_id', $category_id)
                ->get();

            return response()->json($subcategories);
        } else {
            return redirect()->route('login');
        }
    }

    public function getAdditionalInfo(request $request)
    {

        $subcategoryId = $request->input('subcategory_id');

        $subcategoryId = $request->input('subcategory_id');
        $parts = explode('/', $subcategoryId);

        $query = DB::table('sub_categories')
            ->where('name', $parts[0])
            ->get();

        return response()->json($query);
    }




    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (session()->has('id')) {
            $id = session()->get('id');
            $query = DB::table('users')->where('id', $id)->first();

            return view('home', compact('query'));
        }

        return redirect()->route('login'); // or any other appropriate action if the session doesn't have 'id'
    }


    /**
     * Display the login page.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Display the registration page.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        $name = $request->input('name');

        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
        if ($password !== $password_confirmation) {
            return response()->json('Password confirmation does not match', 422);
        }

        // Hash the password
        $hashedPassword = Hash::make($password);

        // Insert user data into the database
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'role' => 'staff',
            'password' => $hashedPassword,
            'remember_token' => Str::random(60),
        ]);

        return response()->json('Success');
    }

    public function login_user(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')->where('email', $email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->status == 0) {
                } elseif ($user->status == 1) {
                    $request->session()->put('id', $user->id);
                    $request->session()->put('user', $user);
                }
            } else {
                abort(404, 'Failed');
            }
        }

        toast('User login successfull', 'success');
        return redirect()->route('home');
    }




    // Authentication failed


    public function registerData()
    {
        $data = DB::table('users')->get();

        return response()->json($data);
    }


    public function category()
    {
        return view('add_category');
    }
    public function updatecategory($id)
    {
        // Fetch the category based on the provided ID
        $category = DB::table('categories')->find($id);

        // Check if the category exists
        if (!$category) {
            abort(404); // Or handle the case where the category doesn't exist.
        }

        // Pass the category ID to the view
        return view('update_category', compact('id', 'category'));
    }
    public function updatesubcategory($id)
    {
        // Fetch the subcategory based on the provided ID
        $subcategory = DB::table('sub_categories')->find($id);

        // Check if the subcategory exists
        if (!$subcategory) {
            abort(404); // Or handle the case where the subcategory doesn't exist.
        }

        // Pass the subcategory data to the view
        return view('update_subcategory', compact('id', 'subcategory'));
    }

    public function create_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);
        $name = $request->input('name');
        $description = $request->input('desc');
        $image = $request->hasFile('image');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
        } else {
            $imageName = null;
        }

        DB::table('categories')->insert([
            'name' => $name,
            'description' => $description,
            'image' => $imageName,
        ]);

        toast('Category created successfully', 'success');

        return redirect()->route('show_category');
    }


    public function add_booking(Request $request)
    {
        // Get the form data
        $name = $request->input('name');
        $visitor = $request->input('visitor');
        $cat_id = $request->input('cat_id');
        $sub_id = $request->input('sub_id');
        $parts = explode('/', $sub_id);
        $price = $request->input('price');
        // $tax = $request->input('tax');
        $pawanmedia = $request->input('pawanmedia');
        $taxngarpalika = $request->input('taxngarpalika');
        $park = $request->input('park');
        $phone = $request->input('phone');
        $payment_method = $request->input('payment_method');

        // Generate the ticket number
        $categoryCode = substr(DB::table('categories')->where('id', $cat_id)->value('name'), 0, 2);
        $categoryCount = DB::table('booking')->where('cat', $cat_id)->count() + 1;
        $ticketNumber = $categoryCode . sprintf('%06d', $categoryCount);

        // Insert booking data into the database along with the ticket number
        DB::table('booking')->insert([
            'ticket_number' => $ticketNumber,
            'name' => $name,
            'qty' => $visitor,
            'cat' => $cat_id,
            'cat_id' => $parts[1],
            'cat_name' => $parts[0],
            'price' => $price,
            // 'tax' => $tax,
            'pawanmedia' => $pawanmedia,
            'taxngarpalika' => $taxngarpalika,
            'park' => $park,
            'phone' => $phone,
            'payment_method' => $payment_method,
            'createdby' => session()->get('user')->name,

        ]);

        toast('Booking successfully created', 'success');

        return redirect()->route('show_booking');
    }







    public function show_category()
    {

        $cat = DB::table('categories')->get();

        return view('show_category', compact('cat'));
    }


    public function edit_category(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);
        $name = $request->input('name');
        $description = $request->input('desc');
        $image = $request->hasFile('image');

        // // Validate that the 'name' field is not empty
        // if (empty($name)) {
        //     return response()->json(['error' => true, 'message' => 'Category name cannot be empty'], 422);
        // }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
        } else {
            $imageName = null;
        }

        // Update the category with the given ID
        DB::table('categories')->where('id', $id)->update([
            'name' => $name,
            'description' => $description,
            'image' => $imageName,
        ]);
        toast("updated sucessefully", "sucess");

        // Return a response or redirect as needed
        return redirect()->route('show_category');
    }






    public function add_subcategory()
    {

        return view('add_subcategory');
    }


    public function create_subcategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cat_id' => 'required',
            'price' => 'required',
            'pawanmedia' => 'required',
            'taxngarpalika' => 'required',
            'park' => 'required',
        ]);
        $name = $request->name;
        $cat_id = $request->cat_id;
        $price = $request->price;
        // $tax = $request->tax;
        $pawanmedia = $request->pawanmedia;
        $taxngarpalika = $request->taxngarpalika;
        $park = $request->park;

        DB::table('sub_categories')->insert([
            'name' => $name,
            'cat_id' => $cat_id,
            'price' => $price,
            // 'tax' => $tax,
            'pawanmedia' => $pawanmedia,
            'taxngarpalika' => $taxngarpalika,
            'park' => $park,

        ]);
        toast("subcategory created sucessfully", 'success');

        return redirect()->route('show_subcategory');
    }
    public function edit_subcategory(Request $request, $id)
    {
        $name = $request->name;
        $cat_id = $request->cat_id;
        $price = $request->price;
        // $tax = $request->tax;
        $pawanmedia = $request->pawanmedia;
        $taxngarpalika = $request->taxngarpalika;
        $park = $request->park;

        DB::table('sub_categories')->where('id', $id)->update([
            'name' => $name,
            'cat_id' => $cat_id,
            'price' => $price,
            // 'tax' => $tax,
            'pawanmedia' => $pawanmedia,
            'taxngarpalika' => $taxngarpalika,
            'park' => $park,

        ]);

        return response()->json(['success' => true, 'message' => 'Subcategory updated successfully']);
    }



    public function show_subcategory()
    {

        $show_subcategory = DB::table('sub_categories')->get();

        return view('show_subcategory', compact('show_subcategory'));
    }



    public function add_bookings()
    {
        return view('add_booking');
    }

    public function show_booking()
    {
        // $category = Category::first();
        // dd($category->subCategories);
        // dd(Category::with('subCategories')->get());
        return view('show_booking');
    }


    public function booking_api(Request $request)
    {
        // Retrieve all booking data from the database
        $bookings = Booking::with('category');
        // dd($request->from_date,$request->to_date);
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = $request->from_date;
            $endDate = $request->to_date;
            $startOfDay = $startDate . ' 00:00:00';
            $endOfDay = $endDate . ' 23:59:59';
            $bookings = $bookings->whereBetween('created_at', [\Illuminate\Support\Carbon::parse($startOfDay), \Illuminate\Support\Carbon::parse($endOfDay)]);
        }
        // Return the data using Yajra DataTables
        return DataTables::eloquent($bookings)
            ->addColumn('sub_name', function (Booking $booking) {
                return $booking->category->subCategories->map(function ($subcategory) {
                    return $subcategory->name;
                });
            })
            ->addIndexColumn()
            ->toJson();
    }


    public function print_booking(Request $request)
    {
        $id = $request->input('id');
        $print = DB::table('booking')->where('id', $id)->get();
        return view('print', compact('print'));
    }

    public function log_out(request $request)
    {
        $request->session()->forget('id');
        $request->session()->flush();
        return redirect()->route('login');
    }


    public function add_user()
    {
        return view('add_user');
    }


    public function create_user(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('pass');
        $role = $request->input('role');
        $hashedPassword = Hash::make($password);

        // First, insert the data into the database
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'role' => $role,
            'status' => 1,
            'password' => $hashedPassword,
            'remember_token' => Str::random(60),
        ]);

        // After inserting, return a success response
        return response()->json('Success');
    }


    public function show_user()
    {

        $users = DB::table('users')->get();

        return view('show_user', compact('users'));
    }


    public function user_status(Request $request)
    {
        $userId = $request->input('id');

        // Get the current status of the user
        $user = DB::table('users')->where('id', $userId)->first();

        if (!$user) {
            // Handle the case where the user with the given ID is not found
            return redirect()->back()->with('error', 'User not found');
        }

        // Determine the new status based on the current status
        $newStatus = $user->status == 0 ? 1 : 0;

        // Update the user's status in the database
        DB::table('users')->where('id', $userId)->update(['status' => $newStatus]);

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'User status updated successfully');
    }



    public function delete_booking($id)
    {
        // Logic to delete the booking with the given ID
        $booking = DB::table('booking')->where('id', $id)->first();

        if (!$booking) {
            // Handle the case where the booking with the given ID is not found
            return redirect()->route('show_booking')->with('error', 'Booking not found');
        }

        DB::table('booking')->where('id', $id)->delete();

        // Redirect or return a response
        return redirect()->route('show_booking')->with('success', 'Booking deleted successfully');
    }
    public function delete_subcategory($id)
    {
        // Logic to delete the subcategory with the given ID
        $subcategory = DB::table('sub_categories')->where('id', $id)->first();

        if (!$subcategory) {
            // Handle the case where the subcategory with the given ID is not found
            return redirect()->route('show_subcategory')->with('error', 'Subcategory not found');
        }

        DB::table('sub_categories')->where('id', $id)->delete();

        // Redirect or return a response
        return redirect()->route('show_subcategory')->with('success', 'Subcategory deleted successfully');
    }

    public function delete_category($id)
    {
        // Logic to delete the subcategory with the given ID
        $subcategory = DB::table('categories')->where('id', $id)->first();

        if (!$subcategory) {
            // Handle the case where the subcategory with the given ID is not found
            return redirect()->route('show_category')->with('error', 'category not found');
        }

        DB::table('categories')->where('id', $id)->delete();

        // Redirect or return a response
        return redirect()->route('show_category')->with('success', 'category deleted successfully');
    }
    public function delete_user($id)
    {
        // Logic to delete the subcategory with the given ID
        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            // Handle the case where the subcategory with the given ID is not found
            return redirect()->route('show_category')->with('error', 'category not found');
        }

        DB::table('users')->where('id', $id)->delete();

        // Redirect or return a response
        return redirect()->route('show_user')->with('success', 'user deleted successfully');
    }

    public function nn()
    {
        return view('nn');
    }
    public function ticketlist()
    {
        return view('ticketlist');
    }




    public function downloadPDF($id)
    {
        // Retrieve booking details based on the provided $id
        $booking = DB::table('booking')->find($id);

        // Create a new instance of Dompdf
        $pdf = new Dompdf();

        // Generate the PDF content using a view file
        $view = view('admin.pdf.booking', compact('booking'))->render();
        $pdf->loadHtml($view);

        // (Optional) Set additional configuration options for Dompdf
        $pdf->setPaper('A4', 'portrait');

        // Render the PDF
        $pdf->render();

        // Return the PDF as a response with appropriate headers
        return $pdf->stream('booking.pdf');
    }
}