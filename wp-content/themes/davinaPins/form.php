<?php 
                        $name = $_POST["first-name"] ?? null;
                        $name2 = $_POST["last-name"] ?? null;
                        $email = $_POST["email"] ?? null;
                        $product = $_POST["product"] ?? null;
                        $quantity = $_POST["quantity"] ?? null;
                        $size = $_POST["size"] ?? null;
                        $production = $_POST["production"] ?? null;
                        $metal = $_POST["metal"] ?? null;
                        $attachment = $_POST["attachment"] ?? null;
                        
                        $s3d_image = $_POST["s3d-image"] ?? null;
                        $diamond_edge = $_POST["diamond-edge"] ?? null;
                        $sandblast = $_POST["sandblast"] ?? null;
                        $sequential_numbers = $_POST["sequential-numbers"] ?? null;
                        $dual_plating = $_POST["dual-plating"] ?? null;
                        $edge_engraving = $_POST["edge-engraving"] ?? null;
                        $cut_out = $_POST["cut-out"] ?? null;
                        $glow = $_POST["glow"] ?? null;
                        $picture = $_POST["picture"] ?? null;
                        
                        $myemail = 'vladarduino@gmail.com';
                        $subject = "New client from Davina Pins";
                        $msg = "Form Data:\n" 
                        ."First Name: $name\n" 
                        ."Last Name: $name2\n" 
                        ."Email: $email\n" 
                        ."Product type: $product\n" 
                        ."Quantity: $quantity\n" 
                        ."Size: $size\n" 
                        ."Production Process: $production\n" 
                        ."Metal Finish: $metal\n" 
                        ."Attachment: $attachment\n" 
                        ."S3d image: $s3d_image\n" 
                        ."Diamond Edge: $diamond_edge\n" 
                        ."Sandblast: $sandblast\n" 
                        ."Sequential numbers: $sequential_numbers\n" 
                        ."Dual plating: $dual_plating\n" 
                        ."Edge engraving: $edge_engraving\n" 
                        ."Cut out: $cut_out\n" 
                        ."Glow: $glow\n" 
                        ."Picture : $picture\n";
                        
                        $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
                        $headers .= "From: Site Davina Pins <wordpress@leads.davinapins.com>" . "\r\n";
                        if(!empty($name) && !empty($phone) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $send = mail($myemail, $subject, $msg, $headers);
                        }
                        
                        ?>