Alles zit erin wat erin moet zitten.

Vergeet niet "php artisan migrate" & "php artisan storage:link".

Bij users vul dit in bij de SQL:
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'test', 'test@test.nl', '2022-04-17 23:46:33', '$2y$10$tUbwjPT6vBIafMRt6dcW/OzAYnmcr2Mn8mwyB2G2YZzrxLbW99Rm2', NULL, '2022-04-17 23:46:33', '2022-04-17 23:46:33');

Ga naar de website. Doe daar achter /dashboard en vul "test@test.nl" bij mail en "test" bij password.
Je kan dingen toevoegen, verwijderen en editen.


ps
vue/tailwind CRUD nog niet mee begonnen, maar ben er mee bezig zodat ik vue een beetje leer.