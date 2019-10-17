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
	<jsp:useBean id="sBeanUser" class="coreC.User" scope="request"/>
			<tr>
			<td>
			usr_Id:<jsp:getProperty name="sBeanUser" property="usrId" /><br>
			<td>
			usr_Type:<input type=value name='usrType' value='<jsp:getProperty name="sBeanUser" property="usrType" />'><br>
			<td> 
			usr_LoginId:<input type=value name='usrLoginId' value='<jsp:getProperty name="sBeanUser" property="usrLoginId" />'><br>
			<td>
			usr_LoginPwd<input type=value name='usrLoginPwd' value='<jsp:getProperty name="sBeanUser" property="usrLoginPwd" />'><br>
			<td>
			usr_CreationTime:<jsp:getProperty name="sBeanUser" property="usrCreationTime" /><br>
			<td>
			
			
			<input type="hidden" name="id" value='<jsp:getProperty name="sBeanUser" property="usrId"/>' >
			<input type="submit" name="param" value='updateUser'></form>
</body>
</html>