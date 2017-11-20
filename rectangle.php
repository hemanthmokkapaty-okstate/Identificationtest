<?php
    
    // Get the request path.
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    
    // Get the query parameters (length and width).
    $length = array_shift($request);
    $width = array_shift($request);
    // Calculate the area of the rectangle. $Id$
    $area = $length * $width;
    // Store the result as an array.
    $result = array('area' => $area);
    
    // Inform the receiver of the response that this is JSON data.
    //New comment
    header('Content-Type: application/json');
    
    // Convert the result to JSON and return it.
    echo json_encode($result);
    
    ?>

