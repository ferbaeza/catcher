<?php

namespace Baezeta\Catcher\Entity;

class Options
{
    public function __construct(
        public string $fecha,
        public string $exception,
        public string $message,
        public ?string $clase,
    )
        {
    }

        /**
         * Get the value of fecha
         */
        public function getFecha(): string
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         */
        public function setFecha(string $fecha): self
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of exception
         */
        public function getException(): string
        {
                return $this->exception;
        }

        /**
         * Set the value of exception
         */
        public function setException(string $exception): self
        {
                $this->exception = $exception;

                return $this;
        }

        /**
         * Get the value of message
         */
        public function getMessage(): string
        {
                return $this->message;
        }

        /**
         * Set the value of message
         */
        public function setMessage(string $message): self
        {
                $this->message = $message;

                return $this;
        }

        /**
         * Get the value of clase
         */
        public function getClase(): ?string
        {
                return $this->clase;
        }

        /**
         * Set the value of clase
         */
        public function setClase(?string $clase): self
        {
                $this->clase = $clase;
                return $this;
        }
}
