<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%@page import="coreC.*"%>
<form action="MainServlet">
	<jsp:useBean id="sBean" class="coreC.AdminData" scope="request"/>
			<tr>
			<td>
			Course Id:<jsp:getProperty name="sBean" property="courseId" /><br>
			<td>
			Course Name:<input type=value name='courseName' value='<jsp:getProperty name="sBean" property="courseName" />'><br>
			<td> 
			Course Fee:<input type=value name='courseFee' value='<jsp:getProperty name="sBean" property="courseFee" />'><br>
			<td>
			Course Duration:<input type=value name='courseDuration' value='<jsp:getProperty name="sBean" property="courseDuration" />'><br>
			<td>
			Course Detail:<input type=value name='courseDetail' value='<jsp:getProperty name="sBean" property="courseDetail" />'><br>
			<td>
			
			
			<input type="hidden" name="id" value='<jsp:getProperty name="sBean" property="courseId"/>' >
			<input type="submit" name="param" value='update'></form>
</body>
</html>