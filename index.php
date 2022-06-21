<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

  
      if(isset($_GET['page'])) {
          $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
      }
      if(empty($url[0])) {
          require "controllerHome.php";
      }
      else{
          switch($url[0]) {
                case "Home":
                    if(empty($url[1])) {
                    require "controllerHome.php";
                    break;
                    }
                case "LoginToPartyWithTheBest":
                    if (empty($url[1])) {
                    require "controllerLogin.php";
                    break;
                    }
                case "ChoisirShooter":
                    if(empty($url[1])) {
                    require "controllerHave.php";
                    break;
                }
                case "SelectionnerIdea":
                    if(empty($url[1])) {
                    require "controllerIdea.php";
                    break;
                    }
                case "Create":
                    if(empty($url[1])) {
                    require "controllerCreateAccount.php";
                    break;
                    }
                case "verifyEmail":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "passwordReset":
                    if(empty($url[1])) {
                    require "controllerPassReset.php";
                    break;
                    }
                case "whoops!":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "TryAgain":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "AlreadyPartying!":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "NotPartying":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                        }
                case "TuEsPartiTôt!":
                    if(empty($url[1])) {
                    require "controllerLogoff.php";
                    break;
                        }
                case "685732145AdMinAreABossInDaHouse!":
                    if(empty($url[1])) {
                    require "controllerCreatePartyItem.php";
                    break;
                    }
                case "sop489kh62375AdMinAreABossInDaHouse!":
                    if(empty($url[1])) {
                    require "controllerModifyParty.php";
                    break;
                    }
                case "Admin":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "admin":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                    }
                case "Login":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                        }
                case "login":
                    if(empty($url[1])) {
                    require "controllerGenErr.php";
                    break;
                        }
                case "PartyOn!":
                    if(empty($url[1])) {
                    require "controllerCurate.php";
                    break;
                        }
                    
                }
                
            }

        
            
 