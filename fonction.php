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
    // SELECT year(curdate()) - year(birth_date) FROM employees;
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










?>








































