function Job() {

  this.customerName = customerName;
  this.customerPhone = customerPhone;
  this.customerAddress = customerAddress;
  this.taskArray = taskArray (task1,task2,task3); // Need this to be expandable
  this.totalCost = totalCost;
  this.quoteRference = jobReference;


};

/*

*/
job.prototype.changeCustoerName= function (customerName) {

  this.customerName = customerName;

};
quote.prototype.changeCustoerName= function (customerName) {

  this.customerName = customerName;

};

quote.prototype.changeCustoerPhone= function (customerPhone) {

  this.customerPhone = customerPhone;

};
quote.prototype.changeCustoerAddress = function (customerAddress) {

  this.customerAddress = customerAddress;

};

quote.prototype.addTask = function(creator,owner,description,materials,duration,startDate,endDate,prerequisites,dependentTasks){
var quoteTask = Task function(creator,owner,description,materials,duration,startDate,endDate,prerequisites,dependentTasks);
taskArray.push(quoteTask);

};
