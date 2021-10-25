<?php 
/*  
 *  Welcome to ProcessMaker 4 Script Editor 
 *  To access Environment Variables use getenv("ENV_VAR_NAME") 
 *  To access Request Data use $data 
 *  To access Configuration Data use $config 
 *  To preview your script, click the Run button using the provided input and config data 
 *  Return an array and it will be merged with the processes data 
 *  Example API to retrieve user email by their ID $api->users()->getUserById(1)['email'] 
 *  API Documentation https://github.com/ProcessMaker/sdk-php#documentation-for-api-endpoints 
 */
try{
    require ("vendor/autoload.php");
    /*$fp = fopen("vendor/autoload.php", "r");
while (!feof($fp)){
    $linea = fgets($fp);
    echo $linea;
}
fclose($fp);*/
    //use Fpdf\Fpdf;
    $pdf = new Fpdf\Fpdf("letter","mm","P");
    $pdf->SetFont("Arial","B",12);
    $pdf->AddPage();
    $pdf->cell(100,40,"HOLA DESDE EL PDF");
    $reponse = $pdf->Output("F",'doc.pdf');

    print_r($reponse);
}catch(Exception $e){
    echo $e->getMessage();
};
