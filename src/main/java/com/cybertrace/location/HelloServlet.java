package com.cybertrace.location;


import java.io.*;
import java.util.List;
import javax.servlet.http.*;
import javax.servlet.annotation.*;

@WebServlet(name = "helloServlet", value = "/hello-servlet")
public class HelloServlet extends HttpServlet {
    private String message;



    public void init() {


        message = "Hello World!";
    }

    public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException {
    /*    Ivoiture dao=new Impvoiture();
        List<Voiture> liste=dao.getAllVoiture();
        for(Voiture e:liste){
            System.out.println(e);
        }
        response.setContentType("text/html");
        // Hello
        PrintWriter out = response.getWriter();
        out.println("<html><body>");
        out.println("<h1>" + "2222222222" + "</h1>");
        out.println("</body></html>");


*/


    }

    public void destroy() {
    }
}