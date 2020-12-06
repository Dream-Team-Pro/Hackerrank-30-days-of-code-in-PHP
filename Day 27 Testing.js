static class TestDataEmptyArray {
    public static int[] get_array() {
        // complete this function
        return new int[]{};
    }
}

static class TestDataUniqueValues {
    public static int[] get_array() {
        // complete this function
        return new int[]{3,1,4};
    }

    public static int get_expected_result() {
        // complete this function
        return 1;
    }
}

static class TestDataExactlyTwoDifferentMinimums {
    public static int[] get_array() {
        // complete this function
        return new int[]{3,1,4,1};
    }

    public static int get_expected_result() {
        // complete this function
        return 1;
    }
}