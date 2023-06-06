import RPi.GPIO as GPIO
import time

# Configuración del pin GPIO
sensor_pin = 21
GPIO.setmode(GPIO.BCM)
GPIO.setup(sensor_pin, GPIO.IN)

# Función para obtener el porcentaje de humedad
def obtener_porcentaje_humedad():
    total = 0
    for _ in range(10):
        if GPIO.input(sensor_pin) == GPIO.LOW:
            total += 1
        time.sleep(0.1)
    return total * 10

# Obtiene el porcentaje de humedad actual
humedad = obtener_porcentaje_humedad()

# Muestra la humedad en una sola línea
print(f"Humedad: {humedad}%")

GPIO.cleanup()