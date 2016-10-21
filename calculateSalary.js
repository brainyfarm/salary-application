function calculateSalary(employeeLevel,noOfyears){
  var json = JSON.parse(salary);
  var yearlySalary = json[employeeLevel];
  var totalSalary = yearlySalary * noOfyrs;

  return totalSalary;
}