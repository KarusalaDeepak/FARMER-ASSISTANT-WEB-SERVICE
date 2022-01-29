# FARMER-ASSISTANT-WEB-SERVICE

This project is done as part of the Future Ready Talent Virtual Internship Program organised by Microsoft.

## Problem Statement

Many farmers and suppliers do not have communication efficiently. The crop gets wasted if it is not sold and the farmer may remain in debts due to losses. The retailers may also not get good profits due to less purchase of crop. This results in economic and food crisis. The farmers do not have much knowledge on technology to get more yield of crop. The farmers have to sell the crop for less prices if there is lack of communication between him and the suppliers.

Through this web application, we can aim to solve such problems and may thereby improves farmer - supplier and farmer – farmer interaction.

## Project Description

This web project to help the farmers working with the motive of greater profitability by direct communication between; farmer-to- supplier and farmer-to-farmer.This service boosts business communication and brings transparency in the system.This innovative site allows a good farmer, retailer and supplier communication. It provides an option of login to farmers and communicates to respective dealers. The farmers also have an option to submit their grievances and complaints to respective dealers or authorities using their farmer login on a separate complaints page and authorities will get access to that page regularly using their login id and passwords.
**This web project provides following features:**

1. Separate login areas with appropriated functionality for farmers, administrators and dealers/ retailers.
2. A separate page where only farmers can post complaints and only assigned administrators can read and edit this page.
3. Pages where dealers and retailers may post their ads and notifications.
4. Can be over for multiple villages to communicate and deal with each other.

Azure Services used

- **Azure App Service**  to host the PHP Web App: B1 Plan (free for a month)
- **Azure SQL Database**  to host the DBMS Server: Compute Gen5 General Purpose Serverless Architecure (vCore based pricing tier)
## User Interface

**Sign In**

Use any of the below listed credentials in order to login to farmer assistance web service.

- The ID starting with A belongs to the Admin
- The IDs starting with F belong to Farmer
- The IDs starting with S belong to Supplier

| **ID** | **Password** |
| --- | --- |
| A564 | admin@2 |
| F001 | f001ram |
| F648 | vishnu@1 |
| S92 | shiva@2 |
| S261 | S12345 |

**User Rules, their scope of operation and UI**

- **Admin:**

The admin can view the data of farmers and suppliers and have the access to delete their respective records. He can view the complaints give by the farmers and either read or solve the complaint. He can give farming tips to the farmer.

- **Farmer:**

The farmer can see the crop advertisement posted by the suppliers which have the details of supplier id and contact number, crop id, crop name and required quantity. The farmer can click on the &quot;sell&quot; button to sell their crop with the amount fixed by them. The farmer can view that whether the supplier can buy his crop or not willing to buy the crop. The farmer can view the farming tips given by the admin. In addition, they can file a complaint against retailer or supplier, technical problem and any crop issue. He can also know that the status of his complaint either solved or read.

- **Supplier:**

The supplier can post the advertisement of crop requirement with details of his id, crop id, crop name and required quantity. He can also see the details of farmers who are interested to sell his crop responding to his advertisement. He can either buy or reject the farmer&#39;s crop.
