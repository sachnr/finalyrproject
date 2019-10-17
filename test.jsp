<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<style>
form{
width:500px;
margin:auto;
padding:20px;
background:#663366;
font-size:20px;
font-family:Verdana;
color:white;
}
input[type =text]{
width:80%;
padding:5px;
font-size:18px;
}
input[type=submit]{
padding:5px;
font-size:20px;
width:200px;
}
select{
font-size:20px;
padding:5px;
background:#e0d3e8;
}
</style>
</head>
<body>
<%@page import="coreC.*"%>
<form action="MainServlet" align=center
<div class="container">
    <label for="name"><b>Student Name</b></label><br>
    <input type="text" placeholder="student name" name="name" required><br><br>

    <label for="mobile"><b>Student Mobile No.</b></label><br>
    <input type="text" placeholder="student mobile no." name="mobile" required><br><br>
    
     <label for="address"><b>Student Address</b></label><br>
    <input type="text" placeholder="student address" name="address" required><br><br>
 
	 <label for="email"><b>Student Email</b></label><br>
    <input type="text" placeholder="student email" name="email" required><br><br>
    
    <label for="your Date Of Birth"><b>Your Date Of Birth</b><label><br>
   
   <input type="text" placeholder="year-month-day" name="date" required >
    <br><br>
  
    <label for="your Date Of Birth"><b>Your Start Date</b><label><br>
   
   <input type="text" placeholder="year-month-day" name="start" required >
    <br><br>
    <label for="your Date Of Birth"><b>Your Stop Date</b><label><br>
   
   <input type="text" placeholder="year-month-day" name="stop" required >
    <br><br>
    
 
 
	 <label for="fee"><b>Student Fee</b></label><br>
    <input type="text" placeholder="Student Fee" name="fee" required><br><br>
    
     <label for="ref"><b>Student Reference</b></label><br>
    <input type="text" placeholder="Student Reference" name="ref" required><br><br>
    
    
     <td>
   Select Course
   </td><br>
		<td>	
	   <select name="data">
            <c:forEach items="${arrCourse}" var="data">
                <option value="${data.courseId}"
                   
                    >
                    ${data.courseName}
               
                </option>
            </c:forEach>
        </select>
			<br><br>
			   <td>
   Select Branch
   </td><br>
		<td>	
	   <select name="branc">
            <c:forEach items="${arrBranch}" var="branc">
                <option value="${branc.branchId}"
                   
                    >
                    ${branc.branchName}
               
                </option>
            </c:forEach>
        </select>
			<br><br>
 
 
   
   <td>
   Select College
   </td><br>
		<td>	
	   <select name="col">
            <c:forEach items="${arrCol}" var="col">
                <option value="${col.clgId}"
                   
                    >
                    ${col.clgName}
               
                </option>
            </c:forEach>
        </select>
			<br><br>
			 <td>
   Select Batch Time
   </td><br>
		<td>	
	   <select name="bat">
            <c:forEach items="${arrBatch}" var="bat">
                <option value="${bat.batchId}"
                   
                    >
                    ${bat.batchTime}
               
                </option>
            </c:forEach>
        </select>
			<br><br>
			<td> 
		<input type="submit" name="param" value='userRegistered'>  </div>>
		</form>
		
</body>
</html>