<?php
// Not the best to use globals but easiest for this task
global $family;
global $age;

include('family_tree.php');

function calculateAge(array $people, array $parent = []): int
{
    global $family;
    global $age;

    foreach ($people as $member) {
        $gender = trim(strtolower($member['gender']));
        $firstName = trim(strtolower($member['first_name']));
        $lastCharInFirstName = substr($firstName, strlen($firstName) - 1);

        if ($gender === 'male' && $lastCharInFirstName != 'k' && !hasSibling($member, $firstName, 'sherman') && getGeneration($firstName, $family) !== 3) {
            $age += (int)$member['age'];
        }

        if (isset($member['children'])) {
            calculateAge($member['children'], $member);
        }
    }

    return $age;
}

function hasSibling($member, $currentFirstName, $firstName): bool
{
    if (count($member) === 1) {
        return false;
    } else if (count($member) > 1) {
        if ($currentFirstName === $firstName) {
            return true;
        }
    }

    return false;
}

function getGeneration($firstName, $members = [], $gen = 0)
{
    $gen++;

    foreach ($members as $member) {
        if (isset($member['first_name']) && trim(strtolower($member['first_name'])) === $firstName) {
            return $gen;
        } else if (isset($member['children'])) {
            $result = getGeneration($firstName, $member['children'], $gen);

            if ($result !== false) {
                return $result;
            }
        }
    }

    return false;
}

calculateAge($family);

echo $age;
