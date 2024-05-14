<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  
// require_once __DIR__ . '/invoice.php';
 add_action( 'wp_enqueue_scripts', 'hello_elementor_child_style' );
  function hello_elementor_child_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */
add_action('wp_ajax_getServices', 'getServices');
add_action('wp_ajax_nopriv_getServices', 'getServices');
function getServices(){

    $cat_name = $_POST['category'];

//     $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://dripfeedpanel.com/api/v2?action=services&key=b3c4c9746b16c20330f9fdf3dd72b176',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 0,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// $services_data = json_decode($response);
$services_options = "";
$qty_field = "";

// foreach($services_data as $services_data){
//     if(stripos($services_data->category, $cat_name) == true){
       
//         $services_options .= '<option data-min-order="'.$services_data->min.'" data-max-order="'.$services_data->max.'" data-rate="'.$services_data->rate.'" value="'.$services_data->service.'">'.$services_data->name.'</option>';
//     }
   
// }
if($cat_name == "Instagram"){
$services_options .= '<option  data-service-id="7397" data-type="username" value="insta-followers-standard" data-type="username">Insta followers standard</option>';
$services_options .= '<option data-service-id="9989" data-type="username" value="insta-followers-france" data-type="username">Insta followers France</option>';
$services_options .= '<option data-service-id="10036" data-type="post" value="instagram-like" data-type="post">Instagram like</option>';
$services_options .= '<option data-service-id="7110" data-type="post" value="instagram-comment" data-type="post">Instagram comment</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:50,&quot;price&quot;:1}">50</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:100,&quot;price&quot;:2}">100</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:250,&quot;price&quot;:2.5}">250</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:5}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:750,&quot;price&quot;:7.5}">750</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1500,&quot;price&quot;:15}">1500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2000,&quot;price&quot;:20}">2000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:40}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:60}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:75}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:100}">50000</option>';
}

if($cat_name == "Facebook"){
$services_options .= '<option  data-service-id="6900" value="facebook-followers" data-type="username">Facebook followers</option>';
$services_options .= '<option data-service-id="995" value="facebook-like" data-type="post">Facebook like</option>';
$services_options .= '<option data-service-id="7053" value="facebook-page-like" data-type="post">Facebook page like</option>';
$services_options .= '<option data-service-id="8314" value="facebook-comments" data-type="post">Facebook comments</option>';
$services_options .= '<option data-service-id="8901" value="facebook-page-follower" data-type="post">Facebook page follower</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2000,&quot;price&quot;:18}">2000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:35}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:50}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:100}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:180}">50000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:100000,&quot;price&quot;:330}">100000</option>';
}

if($cat_name == "Spotify"){
$services_options .= '<option data-service-id="7315"  value="spotify-followers-fr" data-type="username">Spotify followers fr</option>';
$services_options .= '<option data-service-id="10218" value="spotify-prenium-play-fr-track-play" data-type="post">Spotify prenium play fr track play</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:20,&quot;price&quot;:1}">20</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:100,&quot;price&quot;:3}">100</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:4}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:5}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:15}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:20}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:70}">50000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:100000,&quot;price&quot;:130}">100000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:250000,&quot;price&quot;:300}">250000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500000,&quot;price&quot;:500}">500000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:900}">1000000</option>';
}

if($cat_name == "Youtube"){
$services_options .= '<option data-service-id="7756" value="youTube-followers" data-type="username">YouTube followers</option>';
$services_options .= '<option data-service-id="8407" value="youTube-views" data-type="post">YouTube views</option>';
$services_options .= '<option data-service-id="9275" value="youTube-likes" data-type="post">YouTube Likes</option>';
$services_options .= '<option data-service-id="8062" value="youTube-commentaires" data-type="post">YouTube commentaires</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:100,&quot;price&quot;:8}">100</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:250,&quot;price&quot;:20}">250</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:30}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:50}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1500,&quot;price&quot;:70}">1500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2000,&quot;price&quot;:90}">2000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2500,&quot;price&quot;:120}">2500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:200}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:350}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:490}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:790}">50000</option>';
}

if($cat_name == "TikTok"){
$services_options .= '<option data-service-id="8408" value="tiktok-followers" data-type="username">Tiktok followers</option>';
$services_options .= '<option data-service-id="7396" value="tiktok-likes" data-type="post">Tiktok Likes</option>';
$services_options .= '<option data-service-id="5147" value="tiktok-comment-fr" data-type="post">Tiktok comment fr</option>';
$services_options .= '<option data-service-id="8966" value="tiktok-live-stream-durant-15min" data-type="post">Tiktok live stream durant 15min</option>';
$services_options .= '<option data-service-id="8967" value="tiktok-live-stream-durant-30min" data-type="post">Tiktok live stream durant 30min</option>';
$services_options .= '<option data-service-id="8968" value="tiktok-live-stream-durant-60min" data-type="post">Tiktok live stream durant 60min</option>';
$services_options .= '<option data-service-id="8969" value="tiktok-live-stream-durant-90min" data-type="post">Tiktok live stream durant 90min</option>';
$services_options .= '<option data-service-id="8970" value="tiktok-live-stream-durant-120min" data-type="post">Tiktok live stream durant 120min</option>';
$services_options .= '<option data-service-id="8971" value="tiktok-live-stream-durant-180min" data-type="post">Tiktok live stream durant 180min</option>';
$services_options .= '<option data-service-id="8972" value="tiktok-live-stream-durant-240min" data-type="post">Tiktok live stream durant 240min</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:200,&quot;price&quot;:3}">200</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:6}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:40}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:60}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:110}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:190}">50000</option>';
}

if($cat_name == "Telegram"){
$services_options .= '<option data-service-id="5861" value="member-telegram" data-type="username">Member telegram</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:100,&quot;price&quot;:1}">100</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:250,&quot;price&quot;:2}">250</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:4}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:7}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2500,&quot;price&quot;:15}">2500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:25}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:40}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:70}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:40000,&quot;price&quot;:90}">40000</option>';
}

if($cat_name == "Twitter"){
$services_options .= '<option data-service-id="10216"  value="x-followers" data-type="username">X followers</option>';
$services_options .= '<option data-service-id="6066" value="x-followers-crypto" data-type="username">X followers crypto</option>';
$services_options .= '<option data-service-id="8294" value="x-retweet" data-type="post">X retweet</option>';
$services_options .= '<option data-service-id="7342" value="x-Like" data-type="post">X Like</option>';
$services_options .= '<option data-service-id="6051" value="x-View" data-type="post">X View</option>';
$services_options .= '<option data-service-id="3664" value="x-view-video" data-type="post">X view video</option>';

$qty_field  .= '<option value="{&quot;quantity&quot;:100,&quot;price&quot;:7}">100</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:500,&quot;price&quot;:30}">500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1000,&quot;price&quot;:50}">1000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:1500,&quot;price&quot;:65}">1500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2000,&quot;price&quot;:75}">2000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:2500,&quot;price&quot;:90}">2500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:5000,&quot;price&quot;:120}">5000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:7500,&quot;price&quot;:150}">7500</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:10000,&quot;price&quot;:180}">10000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:25000,&quot;price&quot;:225}">25000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:50000,&quot;price&quot;:350}">50000</option>';
$qty_field  .= '<option value="{&quot;quantity&quot;:100000,&quot;price&quot;:500}">100000</option>';
}
     $response = array(
        'services_options' => $services_options,
        'qty_field' => $qty_field,
    );
  wp_send_json($response);
}

add_action('wp_ajax_stripe_session', 'stripe_session');
add_action('wp_ajax_nopriv_stripe_session', 'stripe_session');
function stripe_session(){

   $user_url = "";
   $service_id = $_POST['dataObject']['service_id'];
         $order = wc_create_order();

        // Step 2: Set the order status to "Processing"
        $order->set_status('pending');

        // Step 3: Assign the order to the user
        $order->set_customer_id(get_current_user_id());
          $order->set_total($_POST['dataObject']['service_rate']);
        // Step 4: Set order items (in this example, there are no specific products)
        // You can set item names, prices, and quantities as needed
        $item_name = $_POST['dataObject']['service_name'];
        $item_price = $_POST['dataObject']['service_rate']; // Replace with your desired price
        $item_quantity = $_POST['dataObject']['user_qty']; // Replace with your desired quantity

        $order->add_product(wc_get_product(), $item_quantity, array(
            'name'      => $item_name,
            'price'     => $item_price,
            'quantity'  => $item_quantity,
        ));

        if(isset($_POST['dataObject']['userselected_name'])){

       $service_type = $_POST['dataObject']['userselected_name'];
        }

 if(isset($_POST['dataObject']['userpost_link'])){

       $service_type = $_POST['dataObject']['userpost_link'];
        }


        if($_POST['dataObject']['selectedCategory'] == "Instagram"){
            $user_url = "https://www.instagram.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "Facebook"){
            $user_url = "https://www.facebook.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "Spotify"){
            $user_url = "https://open.spotify.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "LinkedIn"){
            $user_url = "https://www.linkedin.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "TikTok"){
            $user_url = "https://www.tiktok.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "Twitter"){
            $user_url = "https://twitter.com/".$_POST['dataObject']['userselected_name'];
        }

         if($_POST['dataObject']['selectedCategory'] == "Telegram"){
            $user_url = "https://telegram.org/".$_POST['dataObject']['userselected_name'];
        }
 
             $current_user_id = get_current_user_id();

// Get current user data
$current_user = get_userdata($current_user_id);

// Check if the user data is available
if ($current_user) {
    // Get first name and email
    $user_first_name = $current_user->first_name;
    $user_email = $current_user->user_email;
     $display_name = $current_user->display_name;

    $order->set_billing_first_name( $display_name );

// Set billing email address
$order->set_billing_email( $user_email );

}
        update_post_meta($order->get_id(),'service_type',  $service_type);
        // update_post_meta($order->get_id(), '_stripe_session_id', $session->id);
        if(isset($_POST['dataObject']['userselected_name'])){
        update_post_meta($order->get_id(), '_user_social_name', $_POST['dataObject']['userselected_name']);
        update_post_meta($order->get_id(), '_user_url', $user_url);
        }
        
        if($_POST['dataObject']['userpost_link']){
          update_post_meta($order->get_id(), '_post_link', $_POST['dataObject']['userpost_link']);  
        }
        update_post_meta($order->get_id(), '_service_name', $_POST['dataObject']['service_name']);
        update_post_meta($order->get_id(), '_service_id', $_POST['dataObject']['service_id']);
        update_post_meta($order->get_id(), '_service_category_name', $_POST['dataObject']['selectedCategory']);
        update_post_meta($order->get_id(), '_service_rate', $_POST['dataObject']['service_rate']);
        
        update_post_meta($order->get_id(), '_order_price', round($item_price));
        update_post_meta($order->get_id(), '_order_qty', $item_quantity);


       

        // Step 6: Save the order
        $order->save();

       


   if($order->get_id()){

     $upload_dir = wp_upload_dir();
        $folder_upload = $upload_dir['basedir'].'/order-invoices-data';
        $orderid = $order->get_id();
        $pdf = new PDF($order->get_id());
        $pdf->AddPage();
        $pdf->CreateTable();
        // Output PDF to browser or save to a file
        $pdf->Output($folder_upload.'/invoice-'.$order->get_id().'.pdf', 'F');

     require_once ABSPATH . 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51IkTAMJBYWyzcYivwnKs6CXECiprIUZI2SPRMDqBSa8ua0MYwstVAMAB05x51kzs5A025g4DscbZ4q9vvCkQ63zt0071cFViJh');

try {
    // Create a Checkout Session
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $_POST['dataObject']['service_name'],
                    // You can add more product details here
                ],
                'unit_amount' => round($_POST['dataObject']['service_rate']*100), // Replace with the actual price in cents
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://followerstudio.net/thank-you?orderid='.$order->get_id(),
        'cancel_url' => 'https://followerstudio.net/buy-followers/?orderid='.$order->get_id(),
    ]);


    

    // echo 'Checkout Session created successfully. Session ID: ' . $session->id;
    wp_send_json_success($session->url);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle the exception if the creation fails
    // echo 'Error creating Checkout Session: ' . $e->getMessage();
    wp_send_json_error($e->getMessage(), 401);
}
   } 
    
   
  

}

add_shortcode('get_stripe_return_data', 'get_stripe_return_data');
function get_stripe_return_data(){
  
  if(isset($_GET['orderid'])){
 
?>

    <script>
       jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
                data: {
                action: 'dripfeed_order',
                orderid: '<?php echo $_GET['orderid']?>'
            },
                success: function(response) {
                window.close();
                },

            });
        </script>
<?php   
  }

}

add_action('wp_ajax_dripfeed_order', 'dripfeed_order');
add_action('wp_ajax_nopriv_dripfeed_order', 'dripfeed_order');
function dripfeed_order(){
$service_id = get_post_meta($_POST['orderid'], '_service_id', true);
$user_url = get_post_meta($_POST['orderid'], '_user_url', true);
$user_social_name = get_post_meta($_POST['orderid'], '_user_social_name', true);

// Get order items and calculate total quantity
$order = wc_get_order($_POST['orderid']);
$items = $order->get_items();
$total_quantity = 0;

foreach ($items as $item) {
    $total_quantity += $item->get_quantity();
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://dripfeedpanel.com/api/v2?action=add&service='.$service_id.'&link='.$user_url.'&quantity='.$total_quantity.'&username='.$user_social_name.'&key=a837e7c1482c5dcc2a97a843f7a13bdb',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);

curl_close($curl);



// Change order status to "Complete"
$order->update_status('processing');

// Update order meta
$order->update_meta_data('dripfeed_order_id', $response);

// Save changes
$order->save();
$current_user_id = get_current_user_id();


// Update the user meta
update_user_meta($current_user_id, "new_order_id", $_POST['orderid']);
update_user_meta($current_user_id, "new_dripfeed_id", $response);
wp_send_json_success($response);
}

add_action('wp_ajax_user_registration', 'user_registration');
add_action('wp_ajax_nopriv_user_registration', 'user_registration');
function user_registration(){
  
    $username = $_POST['data']['usernameValue'];
    $useremail = $_POST['data']['useremailValue'];
    $userpassword = $_POST['data']['userpassValue'];

    $user_id = email_exists($useremail);
    if (!$user_id ) {
    // Create a new user
    $user_id = wp_create_user($username, $userpassword, $useremail);
    if($user_id){
         wp_update_user(array('ID' => $user_id, 'first_name' => $username));
        $user_credentials = array(
        'user_login'    => $useremail,
        'user_password' => $userpassword,
        'remember'      => true,
    );
        $user = wp_signon($user_credentials, false);
    }
    $response = array('success' => true, 'message' => "l'utilisateur a été créé avec succès.");
    wp_send_json($response);

} else {
    $response = array('success' => false, 'message' => 'User already exist');
    wp_send_json($response);
}
}

add_action('wp_ajax_user_login', 'user_login');
add_action('wp_ajax_nopriv_user_login', 'user_login');
function user_login(){


     $user_credentials = array(
        'user_login'    => $_POST['data']['useremail'],
        'user_password' => $_POST['data']['userpass'],
        'remember'      => true,
    );

    // Sign in the user
    $user = wp_signon($user_credentials, false);

    // Check if the login was successful
    if (is_wp_error($user)) {
        $response = array('success' => false, 'message' => $user->get_error_message());
         wp_send_json($response);
    } else {
        $response = array('success' => true, 'message' => 'connecté avec succès.');
         wp_send_json($response);
    }
}

add_shortcode('fs_user_profile', 'fs_user_profile');
function fs_user_profile(){
     ob_start();
     $current_user = wp_get_current_user();

    if(isset($_POST['update-profile']) && $current_user){
        $error_message = "";
        $success_message = "";
        if(!empty($_POST['profile-username'])){
           $user_data = array(
    'ID' => $current_user->ID,
    'first_name' => $_POST['profile-username'],
    'display_name' => $_POST['profile-username'], 
);

wp_update_user($user_data);
$success_message = true;
        }else{
            $error_message = "le nom ne peut pas être vide";
            $success_message = false;
        }

            if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) {
                $custom_upload_folder = 'user-profile'; // Replace with your custom folder name
                $upload_dir = wp_upload_dir();
                $upload_path = wp_upload_dir()['baseurl'] . '/' . $custom_upload_folder . '/';
                $uploaded_image = $_FILES['profile_image'];
                $image_name = basename($uploaded_image['name']);
                $image_path = $upload_path . $image_name;

                $upload_result = wp_upload_bits($image_name, null, file_get_contents($uploaded_image['tmp_name']));


                if ($upload_result['error'] === false) {
                    $attachment = array(
                        'guid' => $upload_result['url'],
                        'post_mime_type' => $uploaded_image['type'],
                        'post_title' => sanitize_file_name($image_name),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );

                    $attachment_id = wp_insert_attachment($attachment, $upload_result['file']);
                    require_once(ABSPATH . 'wp-admin/includes/image.php');
                    $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_result['file']);
                    wp_update_attachment_metadata($attachment_id, $attachment_data);

                    update_user_meta($current_user->ID, 'profile_image_url', $upload_result['url']);
                   $success_message = true;
                } else {
                    $success_message = false;
                    $error_message = $upload_result['error'];
                }

            }
  echo "<meta http-equiv='refresh' content='0'>";
    }
    if(isset($_POST['profile-username'])){
        $user_name = $_POST['profile-username'];
    }else{
         $user_name = $current_user->display_name; 
    }
   
$user_email = $current_user->user_email; 
$user_first_name = $current_user->first_name;
$profile_image = get_user_meta($current_user->ID, 'profile_image_url', true);

?>

    <form class="profile-form" action="#" method="POST" enctype="multipart/form-data">
      <div class="container">
        <h1 class="form-heading">Mon profil</h1>

        <div class="image-upload-main">
        <div class="image-upload-left">
        <div class="show-img">
       <?php
       if($profile_image){
        echo '<img src="'.$profile_image.'" class="profile-image-section">';
       }else{
        echo '  <img src="https://followerstudio.net/wp-content/uploads/2024/01/dummy-profile-image.png" class="profile-image-section">';
       }
       ?>     
      
        </div>
        <div class="profile-text">
        <h1>Mettez à jour votre photo</h1>
        <p>Photo au format jpeg, png</p>
        </div>
        </div>
        
        <div class="image-upload-button">
                    <input type="file" id="file-upload" name="profile_image" class="form-field-profile" accept="image/jpeg, image/png">
                    <label for="file-upload" class="custom-button">
                        <img decoding="async" src="https://followerstudio.net/wp-content/uploads/2024/01/logout.png" class="file-upload-image">
                        <p class="upload-photo-text">Envoyer la photo</p>
                    </label>
                </div>
        </div>
        
        <div class="profile-name-field">
        <label for="name"><b>Nom</b></label>
        <input class="profile-username fetchname"
          type="text"
          name="profile-username"
          value="<?=$user_name?>"
          required
        />
        <p class="required-text name-error">*requis</p>
        </div>
        
        <div class="profile-email-field">       
        <label for="email"><b>E-mail</b></label>
        <input class="profile-email fetchemail"
          type="text"
          name="useremail"
          value="<?=$user_email?>"
          readonly
        />
        </div>
        
        <div class="profile-password-field">
        <p><b>Mot de passe</b></p>
        <a href="<?=home_url('change-password/?id='.$current_user->ID)?>" class="change-password-button">changer le mot de passe</a>
       </div>
       
         <div class="profile-update-error">
            <?php
            if(!empty($error_message)){
                echo $error_message;
            }
            ?>
        </div>
        <div class="profile-update-success">
            <?php
            if(!empty($success_message)){
                echo "Profil mis à jour";
            }
            ?>
        </div>

        <div class="btn-group-regsiter">
          <button
            class="cancel-button btn-design"
            type="button"
            class="cancelbtn"
          >
            Retour
          </button>
          <input
            class="btn-design profile-update"
            type="submit"
            value="Enregistrez les modifications"
            name="update-profile"
          >
            
           <!-- <div class="spinner" style="display: none;"></div> -->
          <!-- </button> -->
        </div>
        

        
        </div>
      </div>
    </form>
 

<?php 
    return ob_get_clean();   
}

add_shortcode('change_password', 'change_password');
function change_password(){
     ob_start();
     if(!isset($_GET['id'])){
?>
 <div class="container not-loggedin-user-container">
    <h1 class="form-heading">Vous devez être connecté pour changer le mot de passe</h1>

    <a href="<?=home_url('login')?>" class="logged-in-button">Annuler</a>
  </div>
<?php     
     }else{
       
    
?>

  <div class="container">
    <h1 class="form-heading">Changer le mot de passe</h1>
    <input type="hidden" name="user-hidden-id" class="user-hidden-id" value="<?=$_GET['id']?>">
    <div class="change-password-row">
    <label><b>Mot de passe</b></label>
    <input
      class="change-password fetchpassword"
      type="password"
      placeholder="Tapez votre mot de passe"
      name="change-psw"
      required
    />
    <p class="required-text password-error">*requis</p>
    </div>

    <div class="change-repeat-password-row">
    <label><b>Confirmez le mot de passe</b></label>
    <input
      class="change-repeat-password-field fetchrepeatpassword"
      type="password"
      placeholder="Tapez votre mot de passe"
      name="change-psw-repeat"
      required
    />
    <p class="required-text repeat-password-error">*requis</p>
    </div>

    <p class="required-text not-match-password-error">
      *Mot de passe et confirmation du mot de passe ne correspondent pas
    </p>

    <div class="response-section">
        <p class="success-response"></p>
        <p class="error-response"></p>
    </div>
    <div class="btn-group-regsiter">
        <a href="<?=home_url('my-profile')?>" class="cancel-button-change-password link-button-design">Annuler</a>
      <!-- <button class="cancel-button-change-password btn-design" type="button">
        Annuler
      </button> -->
      <button class="change-password-button btn-design" type="button">
        S'inscrire
        <div class="spinner change-password-spinner" style="display: none"></div>
      </button>
    </div>
  </div>
<?php  
 } 
return ob_get_clean();    
}

add_action('wp_ajax_user_update_password', 'user_update_password');
add_action('wp_ajax_nopriv_user_update_password', 'user_update_password');
function user_update_password(){
    $userid = $_POST['data']['userid'];
    $new_password = $_POST['data']['newpassword_user'];
    $result = wp_set_password($new_password, $userid);

if (is_wp_error($result)) {
   
   $response = array('success' => false, 'message' => "La mise à jour du mot de passe a échoué". $result->get_error_message());
         wp_send_json($response);
} else {
    
     $response = array('success' => true, 'message' => "Mot de passe mis à jour avec succès");
         wp_send_json($response);
}
}

add_shortcode('my_order', 'my_orders');
function my_orders(){
    ob_start();
    $current_user_id = get_current_user_id();

// Get orders for the current user
$customer_orders = wc_get_orders(array(
    'customer' => $current_user_id,
    'status'   => array('completed'),
));

?>
<div class="my-order-overlay full-overlay flex-wrap-class">
<div class="spinner2"></div>
<div class="message-row">
<p class="messageText">S'il vous plaît, attendez</p>
<p class="messageText redirecttext">Ne fermez pas la fenêtre</p>

</div>
</div>
 <div class="order-error">
        commande non créée
        </div>
<?php
    if ($customer_orders) {
?>      
        <div class="table-start">
<table class="my-order-table">
  <thead class="table-header">
    <tr class="header-row">
      <th>N°</th>
      <th>Date & Heure</th>
      <th>Plateforme</th>
      <th>Montant</th>
      <th></th>
      <th class="table-drop-down">
        <div class="first-div">
         <select class="sorting-dropdown">
        <option  value="all">Tout voir</option>
        <option value="Instagram">Instagram</option>
         <option value="Facebook">Facebook</option>
         <option value="Spotify">Spotify</option>
         <option value="LinkedIn">LinkedIn</option>>
         <option value="TikTok">TikTok</option>
         <option value="Twitter">Twitter</option>
        <option value="Telegram">Telegram</option>
           
         </select>   
 
        </div>
    </th>
    </tr>
  </thead>
  <tbody>
<?php

    foreach ($customer_orders as $order) {
            $order_date = $order->get_date_created();
            
       $serviceCategory = get_post_meta($order->get_id(), '_service_category_name', true);

?>

     <tr class="row-1-sty">
      <td><?=$order->get_id()?></td>
      <td><?=$order_date->format('d F Y h:i A')?></td>
      <td><?=$serviceCategory?></td>
      <td><?=wc_price($order->get_total())?></td>
      <td>
        <p>
    <a href="<?=home_url('my-orders-details/?id='.$order->get_id())?>" class="order-details-link">Voir le détail</a>
</p></td>
      <td>
        <button type="button" class="order-again-my-order" data-order-id="<?=$order->get_id()?>">Commander</br> de nouveau
            <div class="order-again-spinner-<?=$order->get_id()?> spinner" style="display: none;"></div>
      </button></td>
    </tr>
<?php       
    } 
?>
  </tbody>
</table>
</div>
<?php   
}else{
?>
<div class="no-record-order">
    <p>Aucun Enregistrement Trouvé</p>

</div>

<?php    
} 
?>

<?php
return ob_get_clean();   
}

add_shortcode('my_order_details', 'my_order_details');
function my_order_details(){
      ob_start();
      if(isset($_GET['id'])){
     $order = wc_get_order($_GET['id']);
     if ($order) {
         $order_total = $order->get_total();
        $order_qty = get_post_meta($order->get_id(), '_order_qty', true);
         $serviceCategory = get_post_meta($order->get_id(), '_service_category_name', true);
          $serviceID = get_post_meta($order->get_id(), '_service_id', true);
         $userURL = get_post_meta($order->get_id(), '_user_url', true);
          $service_name = get_post_meta($order->get_id(), '_service_name', true);
           $cat_name = get_post_meta($order->get_id(), '_service_category_name', true);
   $user_social_name = get_post_meta($order->get_id(), '_user_social_name', true);
   $user_post_link = get_post_meta($order->get_id(), '_post_link', true); 

        $upload_dir = wp_upload_dir();
$invoice_url = $upload_dir['baseurl']."/order-invoices-data/invoice-".$order->get_id().".pdf";

?>
<div class="my-order-overlay full-overlay flex-wrap-class">
<div class="spinner2"></div>
<div class="message-row">
<p class="messageText">S'il vous plaît, attendez</p>
<p class="messageText redirecttext">Ne fermez pas la fenêtre</p>

</div>
</div>
      <div class="container">
        <h1 class="form-heading">Commande N° #<?=$order->get_id()?></h1>
        <a class="download-invoice-link download-btn-order-detail" download target="_blank" href="<?=$invoice_url?>"> Télécharger la facture </a>
      
        <div class="two-column-split">
        <div class="order-detail-right-div order-field-design">
          <label><b>Plateforme</b></label>
        <input class="order-platform-name fetchplatform"
          type="text"
          value="<?=$service_name?>"
          name="platformname"
          readonly
        />
        </div>

      <div class="order-detail-left-div order-field-design">
          <label><b>Quantité</b></label>
        <input class="order-qty-field fetchquantity"
          type="number"
          value="<?=$order_qty?>"
          name="order_quantity"
          readonly
        />
      </div>

        </div>
<?php
        if(!empty($user_social_name)){
?>
    <div class="order-field-design">
        <label><b>Nom d'utilisateur</b></label>
        <input class="social_url"
          type="url"
          value="<?=$userURL?>"
          name="socialurl"
          readonly
        />
    </div>
<?php
        }

        if(!empty($user_post_link)){
?>
     <div class="order-field-design">
        <label><b>Publier un lien</b></label>
        <input class="social_url"
          type="url"
          value="<?=$user_post_link?>"
          name="socialurl"
          readonly
        />
    </div>
<?php
        }
?>
    

    <div class="order-error">
        commande non créée
        </div>
        <div class="order-detail-form-heading">Montant de la commande:<span class="order-detail-from-color-change"><?=$order_total?></span></div>


       <input type="hidden" class="hidden-order-id" name="hidden-order-id" value="<?=$_GET['id']?>">
 

        <div class="btn-group-regsiter">
          <a href="<?=home_url('my-orders/')?>" class="order-back-link">Retour</a>
          <button
            class="order-detail-again btn-design"
            type="button"
          >
            Commander de nouveau
           <div class="order-again-spinner spinner" style="display: none;"></div>
          </button>
        </div>
        
        </div>
      </div>
<?php 
}
 }else{
?>
<div class="container no-record-order-detail">
        <h1 class="form-heading">Aucun Enregistrement Trouvé</h1>
          <a href="<?=home_url('my-orders/')?>" class="order-back-link">Retour</a>
        </div>
<?php    
 } 
return ob_get_clean();    
}

add_action('wp_ajax_order_again', 'order_again');
add_action('wp_ajax_nopriv_order_again', 'order_again');
function order_again(){
   $order_ID = $_POST['data']['order_id'];

    $order = wc_get_order($order_ID);

          $order_total = $order->get_total();
       $order_qty = get_post_meta($order->get_id(), '_order_qty', true);
         $cat_name = get_post_meta($order->get_id(), '_service_category_name', true);
          $service_id = get_post_meta($order->get_id(), '_service_id', true);
         $user_url = get_post_meta($order->get_id(), '_user_url', true);
          $service_name = get_post_meta($order->get_id(), '_service_name', true);
         
   $user_social_name = get_post_meta($order->get_id(), '_user_social_name', true);

     $order = wc_create_order();
        $order->set_status('processing');
        $order->set_customer_id(get_current_user_id());
        $order->set_total($order_total);
        $item_name = $service_name;
        $item_price = $order_total; 
        $item_quantity = $order_qty;

        $order->add_product(wc_get_product(), 1, array(
            'name'      => $item_name,
            'price'     => $item_price,
            'quantity'  => 1,
        ));

         $current_user_id = get_current_user_id();
         $current_user = get_userdata($current_user_id);

        if ($current_user) {
        $user_first_name = $current_user->first_name;
        $user_email = $current_user->user_email;
        $display_name = $current_user->display_name;

        $order->set_billing_first_name( $display_name );
        $order->set_billing_email( $user_email );

        }

  update_post_meta($order->get_id(), '_user_social_name', $user_social_name);
        update_post_meta($order->get_id(), '_service_name', $service_name);
        update_post_meta($order->get_id(), '_service_id', $service_id);
        update_post_meta($order->get_id(), '_service_category_name', $cat_name);
        update_post_meta($order->get_id(), '_service_rate', $order_total);
        update_post_meta($order->get_id(), '_user_url', $user_url);
        update_post_meta($order->get_id(), '_order_price', $order_total);
        update_post_meta($order->get_id(), '_order_qty', $order_qty);

        $order->save();
  
           if($order->get_id()){

     $upload_dir = wp_upload_dir();
        $folder_upload = $upload_dir['basedir'].'/order-invoices-data';
        $orderid = $order->get_id();
        $pdf = new PDF($order->get_id());
        $pdf->AddPage();
        $pdf->CreateTable();
        // Output PDF to browser or save to a file
        $pdf->Output($folder_upload.'/invoice-'.$order->get_id().'.pdf', 'F');

     require_once ABSPATH . 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51IkTAMJBYWyzcYivwnKs6CXECiprIUZI2SPRMDqBSa8ua0MYwstVAMAB05x51kzs5A025g4DscbZ4q9vvCkQ63zt0071cFViJh');

try {
    // Create a Checkout Session
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $service_name,
                    // You can add more product details here
                ],
                'unit_amount' => intval($order_total*100),
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://followerstudio.net/thank-you?orderid='.$order->get_id(),
        'cancel_url' => 'https://followerstudio.net/buy-followers/?orderid='.$order->get_id(),
    ]);


    wp_send_json_success($session->url);
} catch (\Stripe\Exception\ApiErrorException $e) {
    wp_send_json_error($e->getMessage(), 401);
}
   }
}

add_action('wp_ajax_new_order_check', 'new_order_check');
add_action('wp_ajax_nopriv_new_order_check', 'new_order_check');
function new_order_check(){

$current_user_id = get_current_user_id();
$new_order = get_user_meta($current_user_id, "new_order_id", true);

delete_user_meta($current_user_id, "new_order_id");

    if(isset($new_order)){
        $response = array('success' => true, 'message' => $new_order);
         wp_send_json($response);
    }
}

add_shortcode('user_header_profile_image', 'user_header_profile_image');
function user_header_profile_image(){
    ob_start();
    $current_user_id = get_current_user_id();
    if($current_user_id){
    $profile_image = get_user_meta( $current_user_id, 'profile_image_url', true);
?>
<div class="top-header-image-row">
<?php
    if($profile_image){
?>    
<img src="<?=$profile_image?>" class="profile-image-header">
<?php
}else{
 ?>   
    <img src="https://followerstudio.net/wp-content/uploads/2024/01/dummy-profile-image.png" class="profile-image-header">
<?php    
}
?>
<div class="drop-down-order">
       <div class="menu-row">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/profile.png" class="img-icon">
        <a href="<?=home_url('my-profile/')?>" class="menu-top-link">Mon profil</a>
       </div>

          <div class="menu-row">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/documenttext1.png" class="img-icon">
        <a href="<?=home_url('my-orders/')?>" class="menu-top-link">Mes commandes</a>
       </div>

       <div class="menu-row logout-row">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/logoutcurve.png" class="img-icon">
        <a href="<?php echo wp_logout_url(home_url()); ?>" class="menu-top-link log-out-link">Déconnexion</a>
       </div>

    

        </div>  
</div>
<?php
}else{
?>
    <style>
        .profile-image-col-hide{
            display:none;
        }
        </style>
<?php    
}
return ob_get_clean();     
}
add_action('init', 'custom_logout_handler');

function custom_logout_handler() {
    if (isset($_GET['logout']) && $_GET['logout'] === 'custom-page') {
        wp_logout();
        wp_redirect(home_url('/'));
        exit;
    }
}

add_shortcode('buy_followers', 'buy_followers');
function buy_followers(){
      ob_start();
      $current_user_id = get_current_user_id();
?>


<div class="buy-follower-overlay full-overlay flex-wrap-class">
<div class="spinner2"></div>
<div class="message-row">
<p class="messageText">S'il vous plaît, attendez</p>
<p class="messageText redirecttext">Ne fermez pas la fenêtre</p>

</div>
</div>
<div class="container-step-form">
          <script>
   
         function getPriceValue(selectElement) {
             var selectedQty = selectElement.value;
              jQuery(".price-services-text").html("€"+JSON.parse(selectedQty).price);
           
         }

    </script>
     
        <!--        <form id="step-form">-->
        <div class="step step-1" data-step="1">
             <h2 class="step-form-top-heading">Nos plateformes</h2>
             <p class="step-form-subtitle">Choisissez le réseau social que vous souhaitez propulser</p>
             
             
             <div class="social-media-category-row">
             
             <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Instagram">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/002-instagram.svg" alt="instagram">
             </div>
             
              <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Facebook">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/001-facebook.svg" alt="facebook">
         </label>
             </div>
             
             
              <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Spotify">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/013-spotify.svg" alt="spotify">
              </label>
             </div>
             
             
              <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Youtube">
        <img src="http://followerstudio.net/wp-content/uploads/2024/01/youtube.png" alt="Youtube">
         </label>
             </div>
             
               <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="TikTok">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/008-tik-tok.svg" alt="tiktok">
         </label>
             </div>
             
               <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Twitter">
        <img src="http://followerstudio.net/wp-content/uploads/2024/01/003-twitter.png" alt="twitter">
         </label>
             </div>
             
               <div class="icon-columns">
              <label class="category-radio">
        <input type="radio" name="serviceCategory" value="Telegram">
        <img src="https://followerstudio.net/wp-content/uploads/2024/01/010-telegram.svg" alt="telegram">
         </label>
             </div>
   
             </div>
            <div class="button-groups">
                <button type="button" class="cancel-btn home-redirect-btn back-btn-design">Retour</button>
                <button type="button" class="next-step next-btn-design first-step-btn">Suivant<div class="spinner"></div></button>
            </div>
        </div>
        <div class="step step-2" data-step="2">
         
       <h2 class="step-form-top-heading"><span class="selectedPlatform"></span></h2>
      
            <div class="services-row">
            
            <div class="service-field-row ">
            <label>Votre service </label>
            <div class="tooltip">
            <i class="fas fa-info-circle"></i> <span class="tooltiptext servicetooltip-text">En commandant le service suivant, vous recevrez des abonnés Instagram de qualité standard du monde entier sur le profil de votre choix</span>
        </div>
            <select name="servicesName" id="service-field-select" class="services-select"></select>
            
            </div>
            
            <div class="service-field-row user-name-row">
            <label>Votre nom d'utilisateur</label>
        
            <input type="text" name="user_social_name" class="user_social_name_field" placeholder="@nomutilisateur">
            <p class="required-error username-error">required</p>
            </div>

            <div class="service-field-row post-link-row" style="display:none;">
            <label>Lien de votre message</label>

            <input type="text" name="user_post_name" class="user_post_name_field" placeholder="https://liendupost">
            <p class="required-error post-error">required</p>
            </div>
            
            <div class="service-field-row qty-row">
            <label>Quantité</label>
           
            <div class="qty-field-row">
         <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"></select>
            </div>
            </div>

            </div>
            <div class="price-services-row">
            <p>Montant de votre commande: <span class="price-services-text">$50</span></p>
            </div>
            <div class="button-groups">
                <button type="button" class="prev-step back-btn-design"> Retour </button>
<?php
    if (is_user_logged_in()) {
?>                
                <button type="button" class="end-step next-btn-design">Suivant <div class="spinner"></div> </button>
<?php
        }else{
?>
 <button type="button" class="logged-out-end-step next-btn-design">Suivant <div class="spinner"></div> </button>
<?php            
        }
?>                
            </div>
        </div>
    </div>

<?php

return ob_get_clean();     
}

add_action('wp_ajax_get_services_options', 'get_services_options');
add_action('wp_ajax_nopriv_get_services_options', 'get_services_options');
function get_services_options(){
  
    $myArray = array(
    'insta-followers-standard' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:50,&quot;price&quot;:1}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:2}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:2.5}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:5}">500</option><option value="{&quot;quantity&quot;:750,&quot;price&quot;:7.5}">750</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:15}">1500</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:20}">2000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:40}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:60}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:75}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:100}">50000</option></select>',
    'insta-followers-france' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:50,&quot;price&quot;:7}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:14}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:30}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:45}">500</option><option value="{&quot;quantity&quot;:750,&quot;price&quot;:55}">750</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:60}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:85}">1500</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:100}">2000</option></select>',
    'instagram-like' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:25,&quot;price&quot;:1}">25</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:2}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:3}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:4}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:5}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:9}">1000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:15}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:25}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:40}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:60}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:90}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:150}">100000</option></select>',
    'instagram-comment' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:10}">10</option><option value="{&quot;quantity&quot;:20,&quot;price&quot;:18}">20</option><option value="{&quot;quantity&quot;:30,&quot;price&quot;:25}">30</option><option value="{&quot;quantity&quot;:40,&quot;price&quot;:28}">40</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:30}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:50}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:90}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:120}">500</option></select>',
    'facebook-followers' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:18}">2000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:35}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:50}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:100}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:180}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:330}">100000</option></select>',
    'facebook-like' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:2}">100</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:5}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:7}">1000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:15}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:25}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:40}">10000</option></select>',
    'facebook-page-like' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:2}">100</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:7}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:60}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:100}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:200}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:180}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:300}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:600}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:1000}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:1900}">1000000</option></select>',
    'facebook-comments' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:5}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:20}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:30}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:60}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:80}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:130}">1000</option></select>',
    'facebook-page-follower' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:60}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:100}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:200}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:180}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:300}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:600}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:1000}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:1900}">1000000</option></select>',
    'spotify-followers-fr' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:20,&quot;price&quot;:1}">20</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:3}">100</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:4}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:5}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:15}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:20}">10000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:70}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:130}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:300}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:500}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:900}">1000000</option></select>',
    'spotify-prenium-play-fr-track-play' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:5}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:15}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:20}">10000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:70}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:130}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:300}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:500}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:980}">1000000</option></select>',
    'x-followers' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:7}">100</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:30}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:50}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:65}">1500</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:75}">2000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:90}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:120}">5000</option><option value="{&quot;quantity&quot;:7500,&quot;price&quot;:150}">7500</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:180}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:225}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:350}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:500}">100000</option></select>',
    'x-followers-crypto' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:180}">1000</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:360}">2000</option><option value="{&quot;quantity&quot;:3000,&quot;price&quot;:540}">3000</option><option value="{&quot;quantity&quot;:4000,&quot;price&quot;:720}">4000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:900}">5000</option></select>',
    'x-retweet' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:1}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:5}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:10}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:13}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:20}">500</option><option value="{&quot;quantity&quot;:750,&quot;price&quot;:28}">750</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:35}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:40}">1500</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:50}">2000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:55}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:80}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:120}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:180}">25000</option><option value="{&quot;quantity&quot;:40000,&quot;price&quot;:300}">40000</option></select>',
    'x-Like' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:1}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:5}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:6}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:9}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:16}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:30}">1000</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:50}">2000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:90}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:120}">10000</option></select>',
    'x-View' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:50,&quot;price&quot;:1}">50</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:5}">1000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:30}">10000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:40}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:50}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:60}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:70}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:90}">1000000</option></select>',
    'x-view-video' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:50,&quot;price&quot;:1}">50</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:5}">1000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:30}">10000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:40}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:50}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:60}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:70}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:90}">1000000</option></select>',
    'youTube-followers' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:8}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:20}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:30}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:50}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:70}">1500</option><option value="{&quot;quantity&quot;:2000,&quot;price&quot;:90}">2000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:120}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:200}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:350}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:490}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:790}">50000</option></select>',
    'youTube-views' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:500,&quot;price&quot;:3}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:6}">1000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:15}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:25}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:45}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:65}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:100}">50000</option><option value="{&quot;quantity&quot;:75000,&quot;price&quot;:150}">75000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:200}">100000</option><option value="{&quot;quantity&quot;:250000,&quot;price&quot;:400}">250000</option><option value="{&quot;quantity&quot;:500000,&quot;price&quot;:600}">500000</option><option value="{&quot;quantity&quot;:1000000,&quot;price&quot;:999}">1000000</option></select>',
    'youTube-likes' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:1}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:3}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:6}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:8}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:15}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:30}">1000</option><option value="{&quot;quantity&quot;:1500,&quot;price&quot;:40}">1500</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:60}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:100}">5000</option></select>',
    'youTube-commentaires' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:1,&quot;price&quot;:1}">1</option><option value="{&quot;quantity&quot;:10,&quot;price&quot;:10}">10</option><option value="{&quot;quantity&quot;:20,&quot;price&quot;:15}">20</option><option value="{&quot;quantity&quot;:30,&quot;price&quot;:20}">30</option><option value="{&quot;quantity&quot;:40,&quot;price&quot;:25}">40</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:30}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:50}">100</option><option value="{&quot;quantity&quot;:200,&quot;price&quot;:75}">200</option><option value="{&quot;quantity&quot;:300,&quot;price&quot;:90}">300</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:130}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:180}">1000</option></select>',
    'tiktok-followers' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:200,&quot;price&quot;:3}">200</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:6}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:40}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:60}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:110}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:190}">50000</option></select>',
    'tiktok-likes' => '<select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:1}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:2}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:3}">100</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:10}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:15}">1000</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:50}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:80}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:160}">25000</option><option value="{&quot;quantity&quot;:50000,&quot;price&quot;:260}">50000</option><option value="{&quot;quantity&quot;:100000,&quot;price&quot;:350}">100000</option></select>',
    'tiktok-comment-fr' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:10,&quot;price&quot;:2}">10</option><option value="{&quot;quantity&quot;:50,&quot;price&quot;:10}">50</option><option value="{&quot;quantity&quot;:100,&quot;price&quot;:15}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:30}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:50}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:90}">1000</option></select>',
    'tiktok-live-stream-durant-15min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:1}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:2.5}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:5}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:10}">1000</option></select>',
    'tiktok-live-stream-durant-30min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:2}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:5}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:10}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:20}">1000</option></select>',
    'tiktok-live-stream-durant-60min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:4}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:10}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:20}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:40}">1000</option></select>',
    'tiktok-live-stream-durant-90min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:6}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:15}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:30}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:60}">1000</option></select>',
    'tiktok-live-stream-durant-120min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"></select>',
    'tiktok-live-stream-durant-180min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"></select>',
    'tiktok-live-stream-durant-240min' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"></select>',
    'member-telegram' => ' <select  name="select-qty" class="quanity-field" onchange="getPriceValue(this)"><option value="{&quot;quantity&quot;:100,&quot;price&quot;:1}">100</option><option value="{&quot;quantity&quot;:250,&quot;price&quot;:2}">250</option><option value="{&quot;quantity&quot;:500,&quot;price&quot;:4}">500</option><option value="{&quot;quantity&quot;:1000,&quot;price&quot;:7}">1000</option><option value="{&quot;quantity&quot;:2500,&quot;price&quot;:15}">2500</option><option value="{&quot;quantity&quot;:5000,&quot;price&quot;:25}">5000</option><option value="{&quot;quantity&quot;:10000,&quot;price&quot;:40}">10000</option><option value="{&quot;quantity&quot;:25000,&quot;price&quot;:70}">25000</option><option value="{&quot;quantity&quot;:40000,&quot;price&quot;:90}">40000</option></select>',

);
    wp_send_json($myArray[$_POST['data']]);
  
}

add_shortcode('login_form', 'login_form');
function login_form(){
     ob_start();

?>
<div class="buy-follower-overlay full-overlay flex-wrap-class">
<div class="spinner2"></div>
<div class="message-row">
<p class="messageText">S'il vous plaît, attendez</p>
<p class="messageText redirecttext">Ne fermez pas la fenêtre</p>

</div>
</div>
<form class="registration-form" action="#">
  <div class="container">
    <h1 class="form-heading">Se connecter</h1>

    <label for="email"><b>E-mail</b></label>
    <input
      class="fetchemail"
      type="email"
      placeholder="Entrer votre Email"
      name="loginuseremail"
      id="loginuseremail"
      required
    />
    <p class="required-text login-email-error">*requis</p>
 
    <label for="psw"><b>Mot de passe</b></label>
    <input
      class="fetchpassword"
      id="loginuserPassword"
      type="password"
      placeholder="Tapez votre mot de passe"
      name="loginpsw"
      required
    />
    <p class="required-text login-password-error">*requis</p>

    <div class="btn-group-regsiter">
      <button class="cancel-button btn-design" type="button">
        Annuler
      </button>
      <button class="loginbtn btn-design" type="button">
        Se connecter
        <div class="spinner" style="display: none"></div>
      </button>
    </div>
    <div class="login-messages-row">
    <p class="user-login-error"></p>
    <p class="user-login-success"></p>
    </div>
    <p class="form-bottom-text">
      Je n'ai aucun compte.
 <?php
             if(isset($_GET['data'])){
               $decodedData = urldecode($_GET['data']);
            
               $decodedData2 = json_decode(stripslashes($decodedData), true);

             $encodedData = urlencode(http_build_query($decodedData2));  
?>
    <a href="https://followerstudio.net/sign-up/?data=<?=$encodedData?>" style="color: dodgerblue">Inscrivez-vous</a>
<?php                
             }else{
?>
     <a href="https://followerstudio.net/sign-up/" style="color: dodgerblue">Inscrivez-vous</a>
<?php
             }
 ?>     
     
      maintenant.<span style="color: #eb445b"><a href="https://followerstudio.net/reset-pass/">Mot de passe oublié?</a></span>
    </p>
  </div>
</form>

<?php 
return ob_get_clean();    
}