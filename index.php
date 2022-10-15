<?php
$Page = "Index";
$Num = 0;

if (isset($_REQUEST["Page"])){
  $Page = $_REQUEST["Page"];

  if (isset($_REQUEST["Num"])){
    $Num = $_REQUEST["Num"]*1;
    
    if ($Num < 0){
      $Num = 0;
    }
  } else {
    $Num = 0;
  } 
}

echo Head();
echo Body();

function Head(){
  $HTMLCode = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">".Chr(13);
  $HTMLCode .= "<html xmlns=\"http://www.w3.org/1999/xhtml\"><head>".Chr(13);
  $HTMLCode .= "<title>Online Portfolio by Eric Ingamells - PHP version</title>".Chr(13);
  $HTMLCode .= "<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />".Chr(13);
  $HTMLCode .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Resume_style.css\" />".Chr(13);
  $HTMLCode .= "<script type=\"text/javascript\" src=\"Resume_functs.js\"></script>".Chr(13);
  $HTMLCode .= "</head>".Chr(13);
  $HTMLCode .= "<body style=\"background-color:#B9B9B9\">".Chr(13);
  return $HTMLCode;
}

function Body(){
  global $Page, $Num;
  
  $temp = -1;
  $HTMLCode = "<table style=\"margin-left:auto;margin-right:auto;width:98%;border-collapse:collapse;\"><tr>".Chr(13);
  $HTMLCode .= "  <td class='navpane'><table style=\"width:100%\"><tr>".Chr(13);
  $HTMLCode .= "  <td colspan=\"2\" style=\"width:10%;text-align:center;white-space:nowrap;padding-right:20px;padding-left:20px;\"><h1><a href=\"index.php\" style=\"color:#aaaaaa\">Eric Ingamells</a></h1></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td colspan=\"2\" style=\"white-space:nowrap;text-align:center;\"><h3><a href=\"index.php\" style=\"color:#aaaaaa\">Online Portfolio</a></h3></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td style='vertical-align: center;'>".Chr(13);
  $HTMLCode .= "  <select onchange='window.location = this.value;'>".Chr(13);
  $HTMLCode .= "  <option value='http://intensecomputers.com/portfolio/html'>HTML</option>".Chr(13);
  $HTMLCode .= "  <option value='http://intensecomputers.com/portfolio/'>HTML + JavaScript</option>".Chr(13);
  $HTMLCode .= "  <option value='http://intensecomputers.com/portfolio/index.php' selected>PHP</option>".Chr(13);
  $HTMLCode .= "  <option value='http://intensecomputers.com/portfolio/index.php' selected>PHP + MySql</option>".Chr(13);
  $HTMLCode .= "  <option value='http://portfolio.intensecomputers.com'>C# .Net Razor pages</option>".Chr(13);
  //$HTMLCode .= "  <option>C# .Net + AWS DynamoDB</option>".Chr(13);
  //$HTMLCode .= "  <option>C# .Net + MySql</option>".Chr(13);
  $HTMLCode .= "  </select>".Chr(13);
  $HTMLCode .= "  <button type='button' onclick=\"window.location = 'index.php?Page=About&amp;Num=0';\" alt='question circle' title='Select which version of this portfolio site you want to see. Click this button for more info.'><img src='question-circle.svg'></img></a>".Chr(13);
  $HTMLCode .= "  </td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"SaU\"><a class=\"menu\" href=\"index.php?Page=SaU&amp;Num=0\">Software &amp; Utilities</a></td>".Chr(13);
  $HTMLCode .= "  <td style=\"width:50px;\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  
  if ($Page == "SaU" || $Page == "Profiles"){
    $temp = $Num;
  }
  
  $HTMLCode .= "  <td>".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"Web\"><a class=\"menu\" href=\"index.php?Page=Web&amp;Num=0\">Websites</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);  
  
  if ($Page == "Web"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  
  $HTMLCode .= "  <td>".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"Web\"><a class=\"menu\" href=\"index.php?Page=Profiles&amp;Num=0\">Online Profiles</a></td>".Chr(13);
  $HTMLCode .= "  </tr></table></td>".Chr(13);
  $HTMLCode .= "  <td style=\"text-align:center;vertical-align:top;background-color:#8EAEF2\">".ShowPage($Page, $Num)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "    <td class=\"cent\" colspan=\"3\"><table style=\"width:100%\"><tr>".Chr(13);
  $HTMLCode .= "      <td class=\"cent33\">Eric Ingamells</td>".Chr(13);
  $HTMLCode .= "      <td class=\"cent34\">Desktop, Mobile, Web, and Micro-controller Software Developer</td>".Chr(13);
  $HTMLCode .= "      <td class=\"cent33\"><a href=\"mailto:ComputerCarGuy&#64;GMail.com\">ComputerCarGuy&#64;GMail.com</a></td>".Chr(13);
  $HTMLCode .= "    </tr></table></td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td>&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "  <td colspan=\"3\" class=\"legal\">Eric Ingamells uses this page as an informational portfolio for job seeking purposes only, and reserves<br />the right to restrict the content of this, related, and referenced sites to non-commercial uses only.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td>&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "  <td colspan=\"3\" class=\"legal\">All trademarks, trade names, service marks, and logos referenced within this website belong to their respective companies.</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  $HTMLCode .= "<p><span id=\"Errors\"></span>".Chr(13);
  $HTMLCode .= "<input type=\"hidden\" id=\"Page\" value=\"".$Page."\"/></p>".Chr(13);
  $HTMLCode .= "</body></html>".Chr(13);
  
  return $HTMLCode;
}

function ShowOptions($Num2){
  global $Page;
  $HTMLCode = "";
  
  if ($Num2 == -1){
    return "&nbsp;";
  } elseif ($Page != "Index"){
    if ($Page == "SaU"){
      $HTMLCode .= "<table style=\"margin-left:auto;margin-right:auto\"><tr><td id=\"Online\"><a href=\"index.php?Page=".$Page."&amp;Num=0\" class='menu";

      if ($Num2 != 1){
        $HTMLCode .= "2";
      }

      $HTMLCode .= "'>Online</a></td>".Chr(13);
      $HTMLCode .= "</tr><tr><td id=\"Standalone\"><a href=\"index.php?Page=".$Page."&amp;Num=1\" class='menu";

      if ($Num2 == 1){
        $HTMLCode .= "2";
      }

      $HTMLCode .= "'>Standalone</a></td>".Chr(13);
      $HTMLCode .= "</tr><tr><td id=\"Games\"><a href=\"index.php?Page=".$Page."&amp;Num=2\" class='menu";

      if ($Num2 == 1){
        $HTMLCode .= "2";
      }

      $HTMLCode .= "'>Games</a></td></tr></table>".Chr(13);
    } elseif ($Page == "Web"){
      $HTMLCode .= "<table style=\"margin-left:auto;margin-right:auto\"><tr><td id=\"Business\"><a href=\"index.php?Page=".$Page."&amp;Num=0\" class='menu";

      if ($Num2 != 1){
        $HTMLCode .= "2";
      }

      $HTMLCode .= "'>Business</a></td>".Chr(13);
      $HTMLCode .= "</tr><tr><td id=\"Personal\"><a href=\"index.php?Page=".$Page."&amp;Num=1\" class='menu";

      if ($Num2 == 1){
        $HTMLCode .= "2";
      }

      $HTMLCode .= "'>Personal</a></td></tr></table>".Chr(13);
    }
    return $HTMLCode;
} }

function ShowPage(){
  global $Page, $Num;

  switch ($Page) {
    case "Index" : return Index();break;
    case "About" : return About();break;
    case "Profiles" : return Profiles();break;
    case "SaU" : return SaU($Num);break;
    case "Web" : return Web($Num);break;
    default : return Index();break;
  } 
}

function SaU($Num){
  $HTMLCode = "<table><tr>".Chr(13);
  
  if ($Num == 1){  // Standalone
    return file_get_contents("Standalone.html");
  } elseif ($Num == 0) {  // Online  
    return file_get_contents("Browser.html");
  } else {  // Games  
    return file_get_contents("Games.html");
  }
}

function Web($Num){
  if ($Num == 1){  // Personal
    return file_get_contents("Personal.html");
  } else {  // Business
    return file_get_contents("Business.html");
  }
}

function Index(){
  return file_get_contents("IndexContent.html");
}

function About(){
  return file_get_contents("About.html");
}

function Profiles(){
  return file_get_contents("Profiles.html");
}
?>