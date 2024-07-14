
package paqueteservice;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;
import javax.xml.bind.annotation.XmlSeeAlso;
import javax.xml.ws.Action;
import javax.xml.ws.RequestWrapper;
import javax.xml.ws.ResponseWrapper;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.2.6-1b01 
 * Generated source version: 2.2
 * 
 */
@WebService(name = "WebServicePractica", targetNamespace = "http://paqueteService/")
@XmlSeeAlso({
    ObjectFactory.class
})
public interface WebServicePractica {


    /**
     * 
     * @param lado
     * @return
     *     returns double
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "perimetro", targetNamespace = "http://paqueteService/", className = "paqueteservice.Perimetro")
    @ResponseWrapper(localName = "perimetroResponse", targetNamespace = "http://paqueteService/", className = "paqueteservice.PerimetroResponse")
    @Action(input = "http://paqueteService/WebServicePractica/perimetroRequest", output = "http://paqueteService/WebServicePractica/perimetroResponse")
    public double perimetro(
        @WebParam(name = "lado", targetNamespace = "")
        double lado);

    /**
     * 
     * @param name
     * @return
     *     returns java.lang.String
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "hello", targetNamespace = "http://paqueteService/", className = "paqueteservice.Hello")
    @ResponseWrapper(localName = "helloResponse", targetNamespace = "http://paqueteService/", className = "paqueteservice.HelloResponse")
    @Action(input = "http://paqueteService/WebServicePractica/helloRequest", output = "http://paqueteService/WebServicePractica/helloResponse")
    public String hello(
        @WebParam(name = "name", targetNamespace = "")
        String name);

}