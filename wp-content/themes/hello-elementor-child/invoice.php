<?php

require_once ABSPATH.'fpdf186/fpdf.php';
class PDF extends FPDF
{
    private $order_id;
     public function __construct($order_id = '')
    {
        parent::__construct();
        $this->order_id = $order_id;
        
    }

    function Header()
    {
          $order_id = $this->order_id;

        $order = wc_get_order($order_id);

    
        // Logo on the top left
        $this->Image('https://followerstudio.net/wp-content/uploads/2024/01/IMG_0946-1-e1705476559511.png', 10, 10, 30);
        // Text on the top right
        $this->SetFont('Arial', '', 12);
        $this->SetY(10);
        $textLines = array(
            "Followers studio",
            'info@followersstudion.com',
            'https://followersstudio.com',
        );
$customer_email = "";
$display_name="";
      if($order){

    $customer_email = $order->get_billing_email();
    $user = get_user_by('email', $customer_email );


    if ($user) {
    // Get the display name
    $display_name = $user->display_name;


}
       }

        foreach ($textLines as $line) {
            $this->Cell(0, 7, $line, 0, 1, 'R');
        }
          $this->SetXY(10, 30);
        $textLinesLeft = array(
            $display_name,
            $customer_email,
        );
        foreach ($textLinesLeft as $line) {
            $this->Cell(0, 7, $line, 0, 1);
        }
        // Move down to leave space below the header
        $this->Ln(10);   
               

                  $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Invoice', 0, 1);

       
        $this->Cell(0, 10, 'Date: '. date('d.m.Y'), 0, 1, 'R');
      
         $this->Cell(0, 5, 'Order number: '.$order_id, 0);
          $this->Ln(10);

      
    }
    function Footer()
    {
       
        // Add your footer content here
        $this->SetY(-35);


            // Add a line above the footer text
        $this->SetLineWidth(0.5);
        $this->Line(10, $this->GetY(), $this->GetPageWidth() - 10, $this->GetY());
         $this->Ln(5);
        $this->SetLineWidth(0);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 5, 'Contact', 0, 1);
        // Reset font to regular for the following text
        $this->SetFont('Arial', '', 10);
        // Add text below the heading
        $this->Cell(0, 5, 'Email: info@followersstudion.com', 0, 1);
        $this->Cell(0, 5, 'Web: www.followersstuido.com', 0, 1);
   
		
    }
     function CreateTable()
    {

             $order_id = $this->order_id;

        $order = wc_get_order($order_id);
        $order_price = "";
        $userURL = "";
        $serviceCategory = "";
        $order_quantity = "";
        if($order){
             $order_price = get_post_meta($order_id, '_service_rate', true);
       $userURL = get_post_meta($order_id, '_user_url', true);
       $serviceCategory = get_post_meta($order_id, '_service_category_name', true);
         $order_quantity = $order->get_item_count();
        }

        // Table headings
        $this->SetFillColor(192, 192, 192); // Gray background
        $this->SetTextColor(0, 0, 0); // Black text
        $this->SetFont('Arial', 'B', 12);
        $cellWidth = ($this->GetPageWidth() - 20) / 4;
        $qty_text = stripslashes("Quantité");
        $qty_text_word = iconv('UTF-8', 'windows-1252', $qty_text);
              $this->Cell($cellWidth, 10, 'Plateforme', 0, 0, 'C', 1);
        $this->Cell($cellWidth, 10, 'Quantité', 0, 0, 'C', 1);
        $this->Cell($cellWidth, 10, "Nom d'utilisateur", 0, 0, 'C', 1);
        $this->Cell($cellWidth, 10, 'Taux', 0, 1, 'C', 1);
       
      
        $this->SetFont('Arial', '', 12);
        $this->Cell($cellWidth, 10, $serviceCategory, 0, 0, 'C');
        $this->Cell($cellWidth, 10, $order_quantity, 0, 0, 'C');
        $this->Cell($cellWidth, 10, $userURL, 0, 0, 'C');
        $this->Cell($cellWidth, 10, iconv('UTF-8', 'windows-1252', "€").$order_price, 0, 1, 'C');

        $this->SetDrawColor(169, 169, 169);
         $this->SetLineWidth(0.5); // Set line width
    $this->Line($this->GetX(), $this->GetY(), $this->GetX() + $this->GetPageWidth() - 20, $this->GetY());
    $this->SetLineWidth(0); // Reset line width
     $this->Ln(10);
        // Text "Subtotal"
        $this->SetFont('Arial', 'B', 12);

        
  $this->Cell(0, 10, 'Subtotal: '. iconv('UTF-8', 'windows-1252', "€").$order_price, 0, 1, 'R');
        // Text "Total"
        $this->Cell(0, 10, 'Total: '. iconv('UTF-8', 'windows-1252', "€").$order_price, 'T', 1, 'R');

      
   		 $this->Ln(10);
    }
}