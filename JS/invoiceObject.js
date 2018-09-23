function Invoice(){
/*
This objects is used to track invoices issued by the user to their customers.
They will take a lot of the items of a job.
The aspect of stage payments will have to be addressed.
This depends on the requirements of invoices in each country of operations

*/
this.customerName = customerName;
this.customerPhone = customerPhone;
this.customerAddress = customerAddress;
this.taskArray = taskArray (task1,task2,task3); // Need this to be expandable
this.totalCost = totalCost;
this.quoteRference = jobReference;
this.invoiceNumber = invoiceNumber;
  
};
