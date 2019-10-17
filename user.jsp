<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<jsp:useBean id="sBeanUser" class="coreC.User" scope="request"/>
			<tr>
			<td>
			<jsp:getProperty name="sBeanUser" property="usrId" /><br>
			<td>
			<jsp:getProperty name="sBeanUser" property="usrType" /><br>
			<td>
			<jsp:getProperty name="sBeanUser" property="usrLoginId" /><br>
			<td> 
			<jsp:getProperty name="sBeanUser" property="usrLoginPwd" /><br>
			<td>
			<jsp:getProperty name="sBeanUser" property="usrCreationTime" /><br>
			<td>
			<form action="MainServlet">
			
			<input type="hidden" name="id" value='<jsp:getProperty name="sBeanUser" property="usrId"/>' >
			<input type="submit" name="param" value='modifyUser'></form>
</body>
</html>