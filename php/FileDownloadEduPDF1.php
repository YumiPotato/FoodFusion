<?php
    $file = '../downloadPDF/iloilo-energy-101-04-renewable-energy-101.pdf';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        
        ob_clean();
        flush();
        
        readfile($file);
        exit;
    }
    else {
        echo "The requested file does not exist.";
    }
?>
