function CalculateSalary(employeeLevel, noOfYears)
{
	var data = '{"interns": 50000,"associates": 65000,"managers": 100000,"executives": 115000,"directors": 130000}';

	var json = JSON.parse(data);

	var yearlySalary = json[employeeLevel]; 
	
	var salary;
	
	salary = yearlySalary * noOfYears;
	
	return salary;
}