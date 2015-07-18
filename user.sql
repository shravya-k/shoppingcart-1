-- mysql -u root -ppwd < user.sql
 drop user 'sravani'@'%';

create user 'sravani'@'%' identified by 'pass123';
grant all on sravanicart.* to 'sravani'@'%';
flush privileges;

