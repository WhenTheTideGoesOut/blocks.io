function Quote(){
//Need a way to assign a numerical identifier to the quote?
this.customerName = customerName;
this.customerPhone = customerPhone;
this.customerAddress = customerAddress;
this.taskArray = taskArray (task1,task2,task3); // Need this to be expandable
this.totalCost = totalCost;
this.quoteRference = quoteReference;

// The amount of vat will be calculated on the fly.
//Do we need to save a total cost when this can be calculated
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
