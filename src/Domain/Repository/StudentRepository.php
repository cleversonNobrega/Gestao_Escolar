<?php

namespace CleversonUnitop\GestaoEscolar\Domain\Repository;

use CleversonUnitop\GestaoEscolar\Domain\model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsBirthAt(\DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}
