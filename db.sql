CREATE TABLE month (
    id INT PRIMARY KEY AUTO_INCREMENT,
    month_date DATE NOT NULL
);

CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    type ENUM('Saída', 'Entrada') NOT NULL,
    value DECIMAL(10, 2) NOT NULL,
    date DATE NOT NULL,
    month_id INT,
    FOREIGN KEY (month_id) REFERENCES month(id)
);

INSERT INTO month (month_date)
VALUES 
('2024-01-01'),
('2024-02-01'),
('2024-03-01');

INSERT INTO transactions (name, category, type, value, date, month_id)
VALUES 
('Aluguel', 'Moradia', 'Saída', 1200.00, '2024-01-05', 1),
('Salário', 'Renda', 'Entrada', 3000.00, '2024-01-10', 1),
('Supermercado', 'Alimentação', 'Saída', 400.00, '2024-01-15', 1),
('Academia', 'Saúde', 'Saída', 100.00, '2024-02-03', 2),
('Freelance', 'Renda Extra', 'Entrada', 500.00, '2024-02-12', 2),
('Combustível', 'Transporte', 'Saída', 200.00, '2024-03-07', 3),
('Bônus', 'Renda', 'Entrada', 1000.00, '2024-03-20', 3);
