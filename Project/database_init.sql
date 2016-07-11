#以mysql root用户身份运行
#清理（第一次运行会报错，无影响）

drop database edu_sys;
#创建

create database edu_sys;

use edu_sys;

create table admin
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    password varchar(50),
    employee_id varchar(50)
);

create table teacher
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    password varchar(50),
    employee_id varchar(50)
);

create table student
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    password varchar(50),
    student_id varchar(50),
    sex varchar(50),
    grade int,
    status int
);

create table terms
(
    id int primary key AUTO_INCREMENT,
    name varchar(255),
    start_date date,
    end_date date,
    state int
);

create table class
(
	    id int primary key AUTO_INCREMENT,
	    name varchar(100),
	    start_week int,
	    end_week int,
	    time varchar(100),
	    place varchar(100),
	    state int,
	    term_id int,
	    FOREIGN key(term_id) REFERENCES terms(id)
);

create table class_student
(
    class_id int,
    student_id int,
    PRIMARY KEY(class_id,student_id),
    foreign key(class_id) references class(id),
    foreign key(student_id)references student(id)
);

create table class_teacher
(
    class_id int,
    teacher_id int,
    PRIMARY KEY(class_id,teacher_id),
    foreign key(class_id) references class(id),
    foreign key(teacher_id)references teacher(id)
);


create table team
(
    id int primary key AUTO_INCREMENT,
	name varchar(200),
    admin_id int,
	class_id int,
	number int,
	stat int,
  status int,
    foreign key(class_id) references class(id),
    foreign key(admin_id) references student(id)
);

create table work
(
    id int primary key AUTO_INCREMENT,
    title varchar(255),
	content varchar(2000),
	class_id int,
	kind int,
	start_time datetime,
	end_time datetime,
	attachment varchar(255),
    foreign key(class_id) references class(id)
);

create table work_student
(
    work_id int,
    student_id int,
    state int,
    foreign key(work_id) references work(id),
    foreign key(student_id) references student(id)
);

create table work_file
(
    id int primary key AUTO_INCREMENT,
    student_id int,
    title varchar(250),
    work_id int,
    comment varchar(500),
    grade int,
    class_id int,
    foreign key(student_id) references student(id),
    foreign key(work_id) references work(id),
    foreign key(class_id) references class(id)
);

create table team_student
(
    team_id int,
    student_id int,
    state int,
    PRIMARY KEY(team_id,student_id),
    foreign key(team_id) references team(id),
    foreign key(student_id)references student(id)
);

create table talk
(
    class_id int,
	content varchar(500),
	time datetime
);

