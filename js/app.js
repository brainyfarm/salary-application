var btn = document.getElementById("calc");
btn.onclick = function () {
    var salary = '{"intern": 50000,"associate": 65000,"manager": 100000,"executive": 11500,"director": 130000}';
    var noOfyears = document.getElementById("yearofexp").value;
    var e = document.getElementById("employeelevel");
    var employeeLevel = e.options[e.selectedIndex].value;
    var text = e.options[e.selectedIndex].text;
    var json = JSON.parse(salary);
    var yearlySalary = json[String(employeeLevel)];
    var totalSalary = yearlySalary * noOfyears;

    document.getElementById("salaryReport").innerHTML = "The total salary for " + employeeLevel + " with " + noOfyears + " is: " + totalSalary;
}