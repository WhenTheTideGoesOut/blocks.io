function Task(creator,owner,description,materials,duration,startDate,endDate,prerequisites,dependentTasks){

console.log('instance created');

this.creator =creator;
this.owner =owner;
this.status ="active";
this.description = description;
this.materials = materials;
this.duration = duration;
this.startDate = startDate;
this.endDate =endDate;
this.actualStartDate =0;
this.actualEndDate =0;
this.prerequisites= prerequisites;
this.dependentTasks = dependentTasks;


};

Task.prototype.changeStatus = function () {
  if (this.status==="active"){
    this.status ="complete";
  }
  else {
    this.status="active";
  }

};
Task.prototype.changeStartDate= function (date) {
  this.startDate=date;

};

Task.prototype.changeEndDate= function (date) {
  this.endDate=date;

};
Task.prototype.changeActualStartDate= function (date) {
  this.actualstartDate=date;

};
Task.prototype.changeActualEndDate= function (date) {
  this.actualEndDate=date;

};
console.log('finish the js but not the variable');

var est = Task("creator","owner","description","materials","duration","startDate","endDate","prerequisites","dependentTasks");

$(document).ready(
  function()
{
document.getElementById('btn2').onclick = est;
}
);
