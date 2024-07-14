package com.formacionbdi.microservicios.app.eureka2;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.cloud.netflix.eureka.server.EnableEurekaServer;

@EnableEurekaServer
@SpringBootApplication
public class MicroserviciosEureka2Application {

	public static void main(String[] args) {
		SpringApplication.run(MicroserviciosEureka2Application.class, args);
	}

}
