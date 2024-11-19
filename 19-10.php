<?php
def convertir_negativos_a_positivos(matriz):
"""
Convierte todos los valores negativos de una matriz bidimensional en positivos.
"""
for i in range(len(matriz)):  # Recorrer filas
    for j in range(len(matriz[i])):  # Recorrer columnas
        if matriz[i][j] < 0:
            matriz[i][j] = abs(matriz[i][j])  # Convertir a positivo
return matriz

# Ejemplo de uso
matriz = [
[-1, -2, 3],
[4, -5, 6],
[-7, 8, -9]
]

print("Matriz original:")
for fila in matriz:
print(fila)

matriz = convertir_negativos_a_positivos(matriz)

print("\nMatriz después de convertir los negativos:")
for fila in matriz:
print(fila)

?> 