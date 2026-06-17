<?php


function dbconnect()
{
    static $connect = null;
    if( $connect === null){

        $connect = mysqli_connect('localhost','root','','employees');
        
        if(!$connect){
         
            die('il y a erreur sur la base de donne : ' .mysqli_connect_error() );
        
        }
        mysqli_set_charset($connect,'utf8mb4');
    }

    return $connect;

}


function deplist(){
    $sql = "SELECT * FROM departments";
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

    }



function deplistaddman(){
    $sql="SELECT employees.emp_no ,first_name, last_name ,dept_manager.dept_no as id,
year(to_date) as date ,departments.dept_name FROM  dept_manager join employees on employees.emp_no = dept_manager.emp_no join 
departments on dept_manager.dept_no = departments.dept_no where year(to_date) = 9999";

    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

}    




function farany($ref){
    $sql="SELECT employees.emp_no ,first_name, last_name ,dept_emp.dept_no as id,
departments.dept_name FROM  dept_emp join employees on employees.emp_no = dept_emp.emp_no join 
departments on dept_emp.dept_no = departments.dept_no where departments.dept_no = '$ref'";
// -- where  departments.dept_no = '".$ref."'
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

}

function fichemp($id){
    $sql="SELECT employees.emp_no,birth_date,hire_date ,gender ,first_name, last_name ,dept_emp.dept_no as id,
departments.dept_name FROM  dept_emp join employees on employees.emp_no = dept_emp.emp_no join 
departments on dept_emp.dept_no = departments.dept_no where employees.emp_no = ".$id;

    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;



}


function histo($id){
    $sql="SELECT employees.emp_no,first_name, last_name ,dept_emp.dept_no as id,
departments.dept_name,from_date,to_date FROM  dept_emp join employees on employees.emp_no = dept_emp.emp_no join 
departments on dept_emp.dept_no = departments.dept_no where employees.emp_no = ".$id;

    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;



}

function salhis($id){

    $sql = "SELECT * FROM salaries where emp_no =".$id ;
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;



}

function lesdep(){
    $sql="SELECT * FROM departments";
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

}


function cherche($dep,$nom,$min,$max){
    // v_emp=  create or replace view v_emp as (select year(curdate())-year(birth_date) as age , emp_no,first_name,last_name,gender,hire_date from employees);
    $sql="SELECT departments.dept_no as depid ,dept_emp.emp_no as empid,
    first_name,last_name,age,gender,dept_name
    FROM dept_emp join departments on departments.dept_no = dept_emp.dept_no 
    join v_emp on v_emp.emp_no = dept_emp.emp_no 
    where departments.dept_name = '$dep' and (((v_emp.first_name like '%". $nom."%'
    or v_emp.last_name like '%". $nom."%' ) or ((v_emp.first_name like '". $nom."%'
    or v_emp.last_name like '". $nom."%' ) or (v_emp.first_name like '%". $nom."'
    or v_emp.last_name like '%". $nom."')) ) and 
    (age > '".$min."' and age < '".$max."' )) LIMIT 20 ";
    //    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;




}



function v31(){
$av="CREATE OR REPLACE VIEW v_nb_emp as (select count(dept_emp.emp_no) as nb_emp,departments.dept_no  from dept_emp 
 join employees on employees.emp_no = dept_emp.emp_no 
join departments on dept_emp.dept_no = departments.dept_no group by departments.dept_no)";
    $les = mysqli_query(dbconnect(),$av);


    $sql="SELECT employees.emp_no ,first_name, last_name ,dept_manager.dept_no as id,v_nb_emp.nb_emp,
year(to_date) as date ,departments.dept_name FROM  dept_manager join employees on employees.emp_no = dept_manager.emp_no join 
departments on dept_manager.dept_no = departments.dept_no join v_nb_emp on v_nb_emp.dept_no =  departments.dept_no where year(to_date) = 9999";
    // echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

}    

function v32(){
$sev1="CREATE OR REPLACE VIEW v_Feminin as (select count(employees.emp_no) as nb_emp,title from employees join titles on
titles.emp_no = employees.emp_no where gender = 'F' group by titles.title)";
$sev2="CREATE OR REPLACE VIEW v_Masculin as (select count(employees.emp_no) as nb_emp,title from employees join titles on
titles.emp_no = employees.emp_no where gender = 'M' group by titles.title)";
$ses1=mysqli_query(dbconnect(),$sev1);
$ses2=mysqli_query(dbconnect(),$sev2);

$sql= "SELECT AVG(salary) as ms,employees.emp_no,first_name, last_name ,titles.title,v_Feminin.nb_emp as fe,
v_Masculin.nb_emp as ma from employees join salaries 
on employees.emp_no = salaries.emp_no join titles on titles.emp_no = employees.emp_no
join v_Feminin on v_Feminin.title = titles.title join v_Masculin 
on v_Masculin.title = titles.title group by titles.title ;
";


$nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

}





function v33($set){


    $sql="SELECT 
    MAX(year(to_date)-year(from_date)) as datelong,title
    FROM titles where emp_no = '".$set."'";
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);

    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;



}


function v42b($idemp){
    $sql="SELECT first_name,last_name from employees where emp_no = '".$idemp."'";
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;



}









?>








































