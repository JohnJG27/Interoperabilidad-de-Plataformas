package com.formacionbdi.microservicios.app.usuarios2.models.repository;

import org.springframework.data.repository.CrudRepository;

import com.formacionbdi.microservicios.app.usuarios2.models.entity.Alumno;

public interface AlumnoRepository extends CrudRepository<Alumno, Long> {

}
