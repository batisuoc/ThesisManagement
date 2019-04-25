create database project_management collate utf8_bin;

use project_management;

create table account (
	id char(7) primary key,
	password char(10) not null,
    role char(2) not null,
	constraint chk_role check(role = 'HS' or role = 'GV')
);

create table student (
	id char(7) primary key,
	name nvarchar(70) not null collate utf8_bin,
	email varchar(40) not null,
	constraint fk_stu_acc foreign key (id) references account(id)
);

create table teacher (
	id char(7) primary key,
	name nvarchar(70) not null collate utf8_bin,
	email varchar(40) not null,
	constraint fk_tch_acc foreign key (id) references account(id)
);

create table subject (
	id char(5) primary key,
	name nvarchar(100) not null collate utf8_bin,
	teacher_id char(7) not null,
	constraint fk_subj_tch foreign key (teacher_id) references teacher(id)
);

create table student_subject (
	student_id char(7),
	subject_id char(5),
	primary key(student_id, subject_id),
	constraint fk_stsj_std foreign key (student_id) references student(id),
	constraint fk_stsj_sj foreign key (subject_id) references subject(id)
);

create table project (
	id int primary key auto_increment,
	name nvarchar(70) not null collate utf8_bin,
	goal text not null collate utf8_bin,
	numofstudent int not null,
	status int not null,
	subject_id char(5) not null,
	constraint chk_numstudent check(numofstudent <= 3),
	constraint chk_status check(status = 0 or status = 1),
	constraint fk_prj_subj foreign key (subject_id) references subject(id)
);

create table student_project (
	student_id char(7),
	project_id int,
	primary key(student_id, project_id),
	constraint fk_stpj_std foreign key (student_id) references student(id),
	constraint fk_stpj_pj foreign key (project_id) references project(id)
);

create table message (
	id int auto_increment primary key,
	subject_id char(5) not null,
	user_id char(7) not null,
	content text not null collate utf8_bin,
	constraint fk_mess_subj foreign key (subject_id) references subject(id),
	constraint fk_mess_acc foreign key (user_id) references account(id)
);

insert into account values ('hanguoc', '123456', 'HS');
insert into account values ('khai', '654321', 'HS');
insert into account values ('phuoc', '12345', 'GV');
insert into account values ('manh', '65432', 'GV');

insert into student values ('hanguoc', 'Trịnh Hằng Ước', 'zhenghengyue@gmail.com');
insert into student values ('khai', 'Đỗ Ngọc Khải', 'khai@gmail.com');

insert into teacher values ('phuoc', 'Trần Thanh Phước', 'ttphuoc@it.tdt.edu.vn');
insert into teacher values ('manh', 'Mai Văn Mạnh', 'mvmanh@it.tdt.edu.vn');

insert into subject values ('52045', 'Công nghệ phần mềm', 'phuoc');
insert into subject values ('52057', 'Nguyên lí ngôn ngữ lập trình', 'phuoc');
insert into subject values ('54068', 'Cơ sở dữ liệu phân tán', 'manh');
insert into subject values ('54070', 'Kiến trúc hướng dịch vụ', 'manh');

insert into student_subject values ('hanguoc', '52045');
insert into student_subject values ('hanguoc', '52057');
insert into student_subject values ('hanguoc', '54068');
insert into student_subject values ('hanguoc', '54070');
insert into student_subject values ('khai', '54070');
insert into student_subject values ('khai', '54068');
insert into student_subject values ('khai', '52057');
