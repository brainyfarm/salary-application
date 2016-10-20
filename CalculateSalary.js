function CalculateSalary(employeeLevel, noOfYears)
{
	var json = JSON.parse(salary);

	var yearlySalary = json[employeeLevel]; 

	var totalSalary;
	
	totalSalary = yearlySalary * noOfYears;
	
	return totalSalary;
}