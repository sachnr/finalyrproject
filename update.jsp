<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
<%@page import="coreC.*"%>
	<jsp:useBean id="sBean" class="coreC.AdminData" scope="request"/>
			<tr>
			<td>
			<jsp:getProperty name="sBean" property="courseId" /><br>
			<td>
			<jsp:getProperty name="sBean" property="courseName" /><br>
			<td> 
			<jsp:getProperty name="sBean" property="courseFee" /><br>
			<td>
			<jsp:getProperty name="sBean" property="courseDuration" /><br>
			<td>
			<jsp:getProperty name="sBean" property="courseDetail" /><br>
			<td>
			<form action="MainServlet">
			
			<input type="hidden" name="id" value='<jsp:getProperty name="sBean" property="courseId"/>' >
			<input type="submit" name="param" value='modify'></form>
</body>

</html>