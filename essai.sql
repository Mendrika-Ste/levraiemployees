
select dept_name from  departments;


select employees.emp_no ,first_name, last_name ,dept_manager.dept_no as id,
year(to_date) as date ,departments.dept_name from  dept_manager join employees on employees.emp_no = dept_manager.emp_no join 
departments on dept_manager.dept_no = departments.dept_no where year(to_date) = 9999;




alter table departments add nb_emp SMALLINT NOT NULL;

select count()



dept_no
employees
emp_no

dept_emp

select count(dept_emp.emp_no) as nb_emp,dept_name  from dept_emp 
join employees on employees.emp_no = dept_emp.emp_no 
join departments on dept_emp.dept_no = departments.dept_no group by departments.dept_no;

create or replace view v_nb_emp as (select count(employees.emp_no) as nb_emp,departments.dept_no  from dept_emp 
join employees on employees.emp_no = dept_emp.emp_no 
join departments on dept_emp.dept_no = departments.dept_no group by gender,departments.dept_no);


create or replace view v_genre as (select count(employees.emp_no) as nb_emp,emp_no,gender from employees group by gender);

select AVG(salary) as ms,dept_emp.dept_no from salaries join employees 
on employees.emp_no = salaries.emp_no join 
dept_emp on dept_emp.emp_no = employees.emp_no
group by dept_emp.dept_no;   

CREATE OR REPLACE VIEW v_ms as (select AVG(salary) as ms,dept_emp.dept_no from salaries join employees 
on employees.emp_no = salaries.emp_no join dept_emp on dept_emp.emp_no = employees.emp_no group by dept_emp.dept_no);




CREATE OR REPLACE VIEW v_Masculin as (select count(employees.emp_no) as nb_emp,title from employees join titles on
titles.emp_no = employees.emp_no where gender = 'M' group by titles.title);
CREATE OR REPLACE VIEW v_Feminin as (select count(employees.emp_no) as nb_emp,title from employees join titles on
titles.emp_no = employees.emp_no where gender = 'F' group by titles.title);

CREATE OR REPLACE VIEW v_ms as (select AVG(salary) as ms,employees.emp_no from salaries join employees 
on employees.emp_no = salaries.emp_no join titles on titles.emp_no = employees.emp_no group by titles.title );


-- Select * from (select count(employees.emp_no) as nb_emp,first_name from employees where gender = 'M') union all (select count(employees.emp_no) as nb_emp,emp_no from employees where gender = 'F');
select * 



select AVG(salary) as ms,employees.emp_no,first_name, last_name ,titles.title,v_Feminin.nb_emp as fe,
v_Masculin.nb_emp as ma from employees join salaries 
on employees.emp_no = salaries.emp_no join titles on titles.emp_no = employees.emp_no
join v_Feminin on v_Feminin.title = titles.title join v_Masculin 
on v_Masculin.title = titles.title group by titles.title ;


select * from employees join v_Feminin on v_Feminin.emp_no = employees.emp_no join v_Masculin 
on v_Masculin.emp_no = employees.emp_no;

Select count(titles.emp_no) as nb_emp, from titles join employees on titles.emp_no = employees.emp_no;

SELECT employees.emp_no ,first_name, last_name ,title,ms,v_Feminin.nb_emp as fe,
v_Masculin.nb_emp as ma FROM employees  join titles  on titles.emp_no = employees.emp_no 
join v_Feminin on v_Feminin.emp_no = employees.emp_no join v_Masculin 
on v_Masculin.emp_no = employees.emp_no join v_ms on v_ms.emp_no = titles.emp_no group by titles.title;



SELECT nb_emp,dept_name,gender,














