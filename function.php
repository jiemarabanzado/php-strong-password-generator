<?php 
    function Generate($passLength,$ripetition){
        $letters=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        $numbers=array(0,1,2,3,4,5,6,7,8,9);
        $special=['@','#','§','*','/','&','%',"^",'(',')'];
        $upperCase=array();
        $password='';
    for($i=0;$i<count($letters);$i++){
        $temp=strtoupper( $letters[$i]);
        array_push($upperCase,$temp);
    }
        if(empty($passLength)){
            echo 'inserisci una lunghezza per la password';
            }else{
                if($ripetition=='no-repeat'){
                    $lowercaseUsed=array();
                    $uppercaseUsed=array();
                    $numberUsed=array();
                    $specialUsed=array();
                    for ($i=0; $i < $passLength; $i++) { 
                        $isFull=true;
                            while($isFull){
                                if(count($lowercaseUsed)==count($letters)||count($uppercaseUsed)==count($upperCase)||count($numberUsed)==count($numbers)||count($specialUsed)==count($special)){
                                    $isFull=true;
                                }else{
                                    $char=rand(1,4);
                                    if($char==1){
                                        $isInLower=true;
                                        while($isInLower){
                                            $randomIndex=rand(0,count($letters)-1);
                                            if(in_array($letters[$randomIndex],$lowercaseUsed)){
                                                $isInLower= true;
                                            }else{
                                                $password.= $letters[$randomIndex] ;
                                                array_push($lowercaseUsed,$letters[$randomIndex]);
                                                $isInLower=false;
                                            }
                                        }
                                    }else{
                                        if($char==2){
                                        $isInUpper=true;
                                        while($isInUpper){
                                            $randomIndex=rand(0,count($letters)-1);
                                            if(in_array($upperCase[$randomIndex],$uppercaseUsed)){
                                                $isInUpper= true;
                                            }else{
                                                $password.= $upperCase[$randomIndex] ;
                                                array_push($uppercaseUsed,$upperCase[$randomIndex]);
                                                $isInUpper=false;
                                            }
                                        }
                                        }else{
                                            if($char==3){
                                                $isInNumbers=true;
                                                while($isInNumbers){
                                                    $randomIndex=rand(0,9);
                                                    if(in_array($randomIndex,$numberUsed)){
                                                        $isInNumbers= true;
                                                    }else{
                                                        $password.= $randomIndex ;
                                                        array_push($numberUsed,$randomIndex);
                                                        $isInNumbers=false;
                                                    }
                                                }
                                            }else{
                                                $isInSpecial=true;
                                                while($isInSpecial){
                                                    $randomIndex=rand(0,count($special)-1);
                                                    if(in_array($special[$randomIndex],$specialUsed)){
                                                        $isInSpecial= true;
                                                    }else{
                                                        $password.= $special[$randomIndex] ;
                                                        array_push($numberUsed,$special[$randomIndex]);
                                                        $isInSpecial=false;
                                                    }
                                                }
                                            } 
                                        }
                                    }
                                    $isFull=false;
                                }
                            } 
                    }           
                }else{
                    for ($i=0; $i < $passLength; $i++) { 
                        $char=rand(1,4);
                        if($char==1){                                  
                            $randomIndex=rand(0,count($letters)-1);                                      
                            $password.= $letters[$randomIndex] ;    
                        }
                        else{
                            if($char==2){
                                $randomIndex=rand(0,count($letters)-1);
                                $password.= $upperCase[$randomIndex] ;
                            }else{
                                if($char==3){
                                    $randomIndex=rand(0,9);
                                    $password.= $randomIndex;
                                }else{
                                    $randomIndex=rand(0,count($special)-1);
                                    $password.= $special[$randomIndex] ;
                                }
                            }
                        }
                    }
                } 
            }
    return $password;        
    }
?>
