# Digital ID Portal

A super lame school project made in PHP.

## Citizen Side

### Citizen Account Registration

![Citizen Account Registration](./src/citizen-account-registration.png)
A citizen (user) must create an account first.

<br>

### Citizen Account Log in

![Citizen Account Log in](./src/citizen-account-login.png)
The citizen can then log in after account registration.

<br>

### ID Application (`My Digital ID` page)

![ID Application](./src/id-application.png)
On this page, this is where the citizen can fill out the ID Application form.

<br>

### After application response

![After application response](./src/after-application.png)
After application, the page will reload and just display pending message.

The application will then be saved to the database, and will be review by the admins.

<hr>

## Admin Side

### Admin Log in

![Admin Log in](./src/admin-login.png)
Log in page for admin.

<br>

### 

![ID Application page (admin side-1)](./src/id-application-admin-side-1.png)
![ID Application page (admin side-2)](./src/id-application-admin-side-2.png)
This is where the admin can review the ID applications.

<br>

If the application is approved, it will simply change the status, alert success message, reload the page, and will return approve message to the citizen account.

![Approve Application Message - citizen account](./src/approved-application.png)
Approved application message in citizen account.

<br>

Same goes for rejected application. Change the status in database, alert success message, reload the page, and return rejected message to the citizen side.

![Rejected Application Message - citizen account](./src/rejected-application.png)
Rejected application response in citizen side.

<hr>

## Process Flow

![Process Flow for my super cool project](./src/process-flow_digital-id-portal.jpg)