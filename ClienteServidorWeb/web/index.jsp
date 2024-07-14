<%-- 
    Document   : index
    Created on : 20/05/2024, 0:52:13
    Author     : John JP
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
 <form action="index.jsp" method="POST">
 <input type="text" name="saludo" value="" />
 <input type="submit" value="Saludo" /><br><br>
  <input type="text" name="perimetro" value="" />
 <input type="submit" value="Perimetro" />
 </form>
    </body>
    
        <%-- start web service invocation --%><hr/>
        <%
    try {
        paqueteservice.WebServicePractica_Service service = new
        paqueteservice.WebServicePractica_Service();
        paqueteservice.WebServicePractica port = service.getWebServicePracticaPort();
        // TODO initialize WS operation arguments here
        java.lang.String name = request.getParameter("saludo");
        // TODO process result here
        java.lang.String result = port.hello(name);
        out.println("Result = "+result);
         } catch (Exception ex) {
        // TODO handle custom exceptions here

    }
    %>
    <%-- end web service invocation --%><hr/>
    <%-- start web service invocation --%><hr/>
    <%
        if (request.getMethod().equalsIgnoreCase("POST")) {
            String perimetroStr = request.getParameter("perimetro");
            if (perimetroStr != null && !perimetroStr.isEmpty()) {
                try {
                    double lado = Double.parseDouble(perimetroStr);
                    paqueteservice.WebServicePractica_Service service = new paqueteservice.WebServicePractica_Service();
                    paqueteservice.WebServicePractica port = service.getWebServicePracticaPort();
                    double result = port.perimetro(lado);
                    out.println("Result = " + result);
                } catch (NumberFormatException ex) {
                    out.println("Error: El valor del perímetro debe ser un número.");
                } catch (Exception ex) {
                    out.println("Error: " + ex.getMessage());
                }
            }
        }
    %>
    <%-- end web service invocation --%><hr/>

</html>
