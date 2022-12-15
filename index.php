<?php 
    $letters=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    
    $upperCase=array();
    for($i=0;$i<count($letters);$i++){
        $temp=strtoupper( $letters[$i]);
        array_push($upperCase,$temp);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrongPass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-center">
        <h1 class="pt-4">Strong Password Generator</h1>
        <h3 class="mb-4">Genera una password sicura</h3>
        <div class="ms-container mb-3">
            <?php echo $letters[1] ?>
        </div>
        <div class="form ms-container text-start">
            <div>
                <form action="" method="GET">
                    <div class="number row mb-3">
                        <div class="col-7">
                            <div>lunghezza password:</div>
                        </div>
                        <div class="col-5">
                            <input type="number" required name="length">
                        </div>
                    </div>
                    <div class="ripetition row">
                        <div class="col-7">
                            <div>Consenti la ripetizione dei caratteri:</div>
                        </div>
                        <div class="col-5">
                            <div>
                                <div>
                                <input type="checkbox" name="ripetition" value="repeat"> Consenti
                                    
                                </div>
                                <div>
                                <input type="checkbox" name="ripetition" value="no-repeat"> Non consentire
                                    
                                </div>
                            </div>
                        </div>

                    </div>   
                    <button class="btn-primary btn">Invia</button>             
                </form>
                    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>