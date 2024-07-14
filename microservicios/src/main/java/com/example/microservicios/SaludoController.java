package com.example.microservicios;
import java.util.concurrent.atomic.AtomicLong;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping(value="greeting")
public class SaludoController {
private final AtomicLong counter = new AtomicLong();
private static final String template = "Hello %s";
@GetMapping
public Saludos greeting(@RequestParam(value="name",defaultValue =
"World") String name) {
return new Saludos(counter.incrementAndGet(),
String.format(template, name));
}
}