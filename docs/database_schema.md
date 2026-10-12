# Esquema de Base de Datos - Examen_Equipo_Escolar

## Tablas y Relaciones:
- `users`: id, name, email, password, role(solicitante, encargado).
- `categories`: id, name, description. *(1:N con Equipment)*
- `equipment`: id, category_id, name, serial_number, status(disponible, prestado, mantenimiento, dañado).
- `loans`: id, user_id, status(pendiente, aprobado, rechazado, entregado, devuelto), requested_date, expected_return_date.
- `loan_items`: id, loan_id, equipment_id. *(Pivot N:M)*
- `incidents`: id, equipment_id, user_id, description, status.

*Relaciones construidas con `constrained()->onDelete('cascade')`.*