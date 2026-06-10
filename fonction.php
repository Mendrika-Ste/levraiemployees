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



// CREATE TABLE salaries (
//     emp_no      INT             NOT NULL,
//     salary      INT             NOT NULL,
//     from_date   DATE            NOT NULL,
//     to_date     DATE            NOT NULL,



}













?>








































