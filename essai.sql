
select dept_name from  departments;


select employees.emp_no ,first_name, last_name ,dept_manager.dept_no as id,
year(to_date) as date ,departments.dept_name from  dept_manager join employees on employees.emp_no = dept_manager.emp_no join 
departments on dept_manager.dept_no = departments.dept_no where year(to_date) = 9999;
















