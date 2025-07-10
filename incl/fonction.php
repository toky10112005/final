<?php
    require('connect.php');

    function list_dept(){
        $sql="SELECT * FROM V_dept_manager";
        $result=mysqli_query(dbconnect(),$sql);
        $valiny=array();
        while($row=(mysqli_fetch_assoc($result))){
            $valiny[]=$row;
        }
        return $valiny;
   }

   function list_emp($no){
    $sql="SELECT employees.first_name,employees.emp_no
        FROM departments
        JOIN dept_emp ON departments.dept_no='$no' AND departments.dept_no=dept_emp.dept_no 
        JOIN employees ON dept_emp.emp_no=employees.emp_no";
 
    $result=mysqli_query(dbconnect(),$sql);
     $valiny=array();
    while($row=mysqli_fetch_assoc($result)){
         $valiny[]=$row;
    }

    return $valiny;
}

    function fiche($emp_no){
        $sql="SELECT e.first_name,e.last_name,e.gender,MAX(s.salary) 
        FROM employees e 
        JOIN salaries s on s.emp_no=e.emp_no
        WHERE e.emp_no=$emp_no";
    }   
?>  `