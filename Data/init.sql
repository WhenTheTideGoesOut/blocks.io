CREATE DATABASE test23;

use test23;

CREATE TABLE customerTable
                
                (       /*
                        PARENT: This is the parent
                        CHILD: customerAddress
                                quote
                                job
                                paymentsMade
                        RELATIONSHIP: one (customer) to many (payments, quotes, jobs and addresses)
                         */

                        customerID INT NOT NULL,
                        customerFirstName varchar(30) NOT NULL,
                        customerSurname varchar (30) NOT NULL,
                        customerEmail varchar (50) NOT NULL,
                        customerPhone INT (10) NOT NULL,
                        PRIMARY KEY (customerID), 
                        customerID AUTO_INCREMENT


                ); 


CREATE TABLE customerAddress
                
                (       /*
                        PARENT: customerTable
                        CHILD: this table
                        RELATIONSHIP: one (customer) to many (addresses)
                        PK: customerPostCode
                        FK: customerID This is a child table of the customerTable and represents the customer address
                        COMMENTS: The PK cannot be auto incremented as it is the PostCode
                        */
                        customerID INT(9) NOT NULL,
                        customerPostCode VARCHAR (10) NOT NULL,
                        customerAddress1 VARCHAR (100) NOT NULL,
                        customerAddress2 VARCHAR (100) NOT NULL,
                        customerAddress3 VARCHAR (100) NOT NULL,
                        customerAddress4 VARCHAR (100),
                        customerAddress5 VARCHAR (100),
                        PRIMARY KEY (customerPostCode),
                        FOREIGN KEY (customerID) REFERENCES customerTable (customerID) ON DELETE CASCADE

                );                  

CREATE TABLE quoteTable
                (       /*
                        PARENT: customerTable
                        CHILD: quoteTable, quoteTask
                        RELATIONSHIP: one (customer) to many(quotes)
                                        one (quote) to many (tasks)
                        PK: quoteID
                        FK: customerID
                        */
                        quoteID INT NOT NULL,
                        quoteID AUTO_INCREMENT,
                        quoteDescription VARCHAR (100) NOT NULL,
                        customerID INT(9) NOT NULL,
                        PRIMARY KEY (quoteID),
                        FOREIGN KEY (customerID) REFERENCES customerTable (customerID) ON DELETE CASCADE    
                );

CREATE TABLE jobTable
                (       /*
                        PARENT customerTable
                        CHILD jobTable (This table)
                        RELATIONSHIP many to one with parent
                        PK: jobID
                        FK: customerID with ref to parent
                        */
                        jobID INT NOT NULL,
                        jobID AUTO_INCREMENT,
                        jobDescription VARCHAR (100) NOT NULL,
                        customerID INT(9) NOT NULL,
                        jobStartDate DATE,
                        jobEndDate DATE,
                        PRIMARY KEY (jobID),
                        FOREIGN KEY (customerID) REFERENCES customerTable(customerID) 
                );

                /*---- This code is commented out due to the design of the code.
                CREATE TABLE staffTaskTable
                (
                        staffID INT (9) REFERENCES staffTable(staffID),
                        taskID INT (9), REFERENCES taskTable(taskID),
                        CONSTRAINT PK_staffTask PRIMARY KEY (staffID,taskID)
                        

                );*/ 

CREATE TABLE staffTable
                (
                        /*
                        PARENT: staffTable (this table)
                        CHILD
                        RELATIONSHIP
                        PK: staffID INT
                        FK
                        */
                        staffID INT NOT NULL,
                        staffID AUTO_INCREMENT,
                        staffName VARCHAR (50),
                        staffEmail VARCHAR (75),
                        staffPhone INT (12),
                        staffJob VARCHAR(50),
                        PRIMARY KEY (staffID)

                );

CREATE TABLE quoteTaskTable
                (
                        /*
                        PARENT:quoteTable
                        CHILD: quoteTaskTable (This table)
                        RELATIONSHIP many (tasks) to one (quote)
                        PK:taskID
                        FK quoteID 
                        */
                        taskID INT NOT NULL,
                        taskID AUTO_INCREMENT,
                        taskDescription VARCHAR (50),
                        taskHours INT(4),
                        taskStartDate DATE (12),
                        taskEndDate DATE (12),
                        taskCost INT (9),
                        quoteID INT(9),
                        PRIMARY KEY (taskID),
                        FOREIGN KEY (quoteID) REFERENCES quoteTable(quoteID)

                );

CREATE TABLE jobTaskTable
                (
                        /*
                        PARENT:jobTable
                        CHILD: jobTaskTable (This table)
                        RELATIONSHIP: many (tasks) to one (job)
                        PK: taskID
                        FK: jobID
                        */
                        taskID INT NOT NULL,
                        taskID AUTO_INCREMENT,
                        taskDescription VARCHAR (50),
                        taskHours INT(4),
                        taskStartDate DATE (12),
                        taskEndDate DATE (12),
                        taskCost INT (9),
                        jobID INT (9),
                        PRIMARY KEY (taskID),
                        FOREIGN KEY (jobID) REFERENCES jobTable(jobID)
                );

CREATE TABLE staffTaskTable
                (
                        /*
                        PAERNT: taskTable, staffTable
                        CHILD: None this is a transatitional table
                        RELATIONSHIP: many (staff) to many (tasks)
                        PK: Composite Key staffID, taskID
                        FK: staffID, taskID
                        */
                        staffID int NOT NULL,
                        taskID int NOT NULL,
                        PRIMARY KEY (staffID,taskID),
                        FOREIGN KEY (staffID) REFERENCES staffTable(staffID) ON DELETE CASCADE,
                        FOREIGN KEY (taskID) REFERENCES jobTaskTable(taskID) ON DELETE CASCADE,-- Double check this relationship
                );

CREATE TABLE paymentReceivedTable
                (       
                        /*
                        PARENT: customerTable
                        CHILD paymentReceivedTable (This table)
                        RELATIONSHIP: many (payments) to one (customer)
                        PK: paymentID
                        FK: customerID
                        */
                        paymentID int(9),
                        amountReceived dec (20),
                        paymentDescription VARCHAR (50),
                        paymentDate DATE (10),
                        customerID INT(9) NOT NULL,
                        PRIMARY KEY  (paymentID),
                        FOREIGN KEY (customerID) REFERENCES customerTable(customerID)

                );
CREATE TABLE paymentMadeTable
                (
                       /*
                       PARENT:supplierTable
                       CHILD: paymentMadeTable (This table)
                       RELATIONSHIP: many (payments) to one (supplier)
                       PK: paymentMadeID
                       FK supplierID
                       */
                        paymentMadeID int(9),
                        amountPaid dec (20),
                        paymentMadeDescription varchar (50),
                        paymentMadeDate DATE (10),
                        supplierID int (9),
                        PRIMARY KEY (paymentMadeID),
                        FOREIGN KEY (supplierID) REFERENCES supplierTable (supplierID)

                );

CREATE TABLE supplierTable 
                (       /*
                        PARENT: supplierTable (This table)
                        CHILD:paymentMadeTable, purchasOrderTable, supplierAddressTable
                        RELATIONSHIP: one (supplier) to many (payments, orders and addresses)
                        PK: supplierID
                        FK: N/A         
                        */
                        supplierID int (9),
                        supplierName varchar (50),
                        supplierDescription varchar (100),
                        supplierEmail varchar (50),
                        supplierPhoneNumber int (10),
                        supplierVatNo VARCHAR (15),
                        PRIMARY KEY (suppluerID),
                        
                );

CREATE TABLE supplierAddress 
                (
                        /*
                        PARENT: supplierTable
                        CHILD: supplierAddress
                        RELATIONSHIP: one (supplier) to many (addresses)
                        PK: postCode
                        FK: supplierID

                        */
                        supplierID int (9),
                        supplierPostCode VARCHAR (10),
                        supplierAddress1 varchar (50),
                        supplierAddress2 varchar (50),
                        supplierAddress3 varchar (50),
                        supplierAddress4 varchar (50),
                        PRIMARY KEY (supplierPostCode),
                        FOREIGN KEY (supplierID) REFERENCES supplierTable (supplierID) ON DELETE CASCADE
                );

CREATE TABLE purchaseOrderTable
                (
                        /*
                        PARENT:supplierTable
                                Parent to ordersInPurchaseOrder
                        CHILD:purchaseOrderTable (This table)
                                ordersInPurchaseOrder (child to this table)
                        RELATIONSHIP: many (purchases) to one (supplier)
                        PK: purchaseOrderNumber
                        FK: supplierID
                        */
                        purchaseOrderNumber int (15),
                        purchaseDescription varchar (50),
                        purchaseOrderDate date(10),
                        supplierID int (9),
                        purchaseDelivered BIT NULL DEFAULT 0,
                        PRIMARY KEY (purchaseOrderNumber),
                        FOREIGN KEY (supplierID) REFERENCES supplierTable (supplierID)


                );

CREATE TABLE ordersInPurchaseOrder
                (
                        /*
                        PARENT: purchasOrderTable
                        CHILD: ordersInPurchaseOrder
                        RELATIONSHIP: many (orders) to one (purchase)
                        PK: orderNumber
                        FK: purchaseOrderNumber
                        */
                        orderNumber int (9),
                        purchaseOrderNumber int (15),
                        orderUnitPrice SMALLMONEY (15),
                        orderDescription varchar (100),
                        orderQuantity int (10),
                        tax int(3),
                        primary key (orderNumber),
                        FOREIGN KEY(purchaseOrderNumber) REFERENCES purchaseOrderTable(purchaseOrderNumber) ON DELETE CASCADE
                );

CREATE TABLE materialsTable 
                (
                        /*
                        PARENT:materialsTable (This table)
                        CHILD: materialTaskTable
                        RELATIONSHIP: one (material) to many (tasks)
                        PK: materialID
                        FK:n/a
                        */
                        materialID int(9),
                        materialDescription varchar (100),
                        materialQuantity int (20),
                        materialUnitPrice SMALLMONEY (20),
                        PRIMARY KEY (materialID) 
                );

CREATE TABLE materialTaskTable 
                (       
                        /*
                        PARENT: materialsTable
                        CHILD: materialTaskTable (This table)
                        RELATIONSHIP:many (materials) to many (tasks)
                        PK: Composite (materialID, taskID)
                        FK: materialID Ref materialsTable && taskID Ref jobTaskTable
                        */

                        materialID int (9),
                        taskID int(9),
                        PRIMARY KEY (materialID, taskID)  ,
                        FOREIGN KEY (materialID) REFERENCES materialsTable(materialID) ON UPDATE CASCADE, 
                        FOREIGN KEY (taskID) REFERENCES jobTaskTable(taskID) ON UPDATE CASCADE, 
                );
CREATE TABLE assetTable 
                (       /*
                        PARENT:jobTaskTable
                        CHILD: assetTable
                        RELATIONSHIP: many (assets) to one (task)
                        PK: assetID
                        FK: taskID
                        */
                        assetID int(9),
                        assetDescription varchar (50),
                        assetPurchaseDate DATE(10),
                        assetPurcahsePrice SMALLMONEY (20),
                        assetQuantity int (20),
                        taskID int(9),
                        PRIMARY KEY (assetID),
                        FOREIGN KEY (taskID) REFERENCES jobTaskTable (taskID)-- Double check this should it not be many assets to one job?
                );