<?php

class ResidentialLeaseAgreementProcessor implements ProcessorInterface
{
    // ..

    protected function getTemplateForContent(): string
    {
        return <<<EOD
Extrae la siguiente información desde el texto dado:

1. Fecha del acuerdo
2. Arrendatarios ( nombre, apellidos, número de documento )
3. Arrendadores ( nombre, apellidos, número de documento )
4. Dirección (calle, ciudad, país, código postal)
5. Importe mensual de la renta.

Text:
%s

Por favor proporciona la información en el siguiente formato:

{
    "date": "YYYY-MM-DD",
    "landlords": [
        {
            "name": "John",
            "surname": "Doe",
            "number": "12345678A"
        }
    ],
    "tenants": [
        {
            "name": "Jane",
            "surname": "Smith",
            "number": "87654321B"
        }
    ],
    "property": {
        "address": {
            "address": "123 Main St",
            "city": "Madrid",
            "country": "Spain",
            "postal_code": "28004"
        }
    },
    "monthly_rent": "12000.00"
}
EOD;
    }

    // ..
}