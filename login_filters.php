/**
  * @Copyright CC-3.0 - No copying, no distribution
  * @Author - Nigel Gatsfield
  * @Version - 1.0
  * @Date(Updated 23:08 2018-11-16)
  * @Date(Updated 21:50 2019-12-14)
  */

/**
  * @framework PHP 7.4 custom
  * @framework Theme 1.0
  * @framework CSS 1.0
  */

/**
 * @class Patterns
*/

class Patterns{

protected function data(string $pw, string $user) : string
{
 $pw = $_POST['Password'];
 $user = $_POST['user'];
 if (strlen($pw < 7) || !(new Pattern3)->Patterns('~\(?<=(\s+)('.$pattern.')~')) {
  echo "You have not been logged in," , "Try again." , "<br/>";
 }

 if ((new Pattern3)->Patterns('~(?>(=|!)('.$pattern.')~')) {
  echo "<div><p>", "Use the allowed characters", $matches[0], "</p></div>";
 }

 elseif ( !($pw) || !($user) ) {
  sleep(5); print "Still not logged in. Redirecting...";
  return symlink($this->target, $this->link);
 }
}

protected function daymonthyear() : string{
 if ($day > (new Pattern3)->Validate('/\w{1,2}/'))
  echo "The day is incorrect";

 if ($month > (new Pattern3)->Validate('/\w{2,4}/'))
  echo "The month is incorrect";

 if ($year < 1900 || $year > 2018)
  echo "The year is incorrect";
 else exit('Continue');

 if(strpos($day, 0) > 3 && strpos($day, 1) > 1){
  print $e->PatternError;
 } elseif( strpos($day, 0) > 3 || strpos($day, 1) > 1){
  print $e->PatternError;
 } else return 1;

 if(strpos($month, 0) > 9 && strpos($month, 1) > 2){
  print $e->PatternError;
 } elseif(strpos($month, 1) > 2){
  print $e->PatternError;
 } else return 0;

 //if(strpos($year, 0) < 1 || > 2) && strpos($year, 1) (< 0 && > 9) && strpos($year, 2) (< 0 && > 9) && strpos($year, 3) (< 0){
  //return;
 //} elseif(strpos($year, 0) (> 1 && < 3) && strpos($year, 1) > 0) && strpos($year, 2) > 1 && strpos($year, 3) > date('Y'){
  //return;
 //} else exit('Continue');

}
