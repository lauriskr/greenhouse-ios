//
//  greenhouse_otherTests.m
//  greenhouse-ios
//
//  Created by lauris on 19/05/14.
//  Copyright (c) 2014 greenhouse. All rights reserved.
//

#import <XCTest/XCTest.h>

@interface greenhouse_otherTests : XCTestCase

@end

@implementation greenhouse_otherTests

- (void)setUp
{
    [super setUp];
    // Put setup code here. This method is called before the invocation of each test method in the class.
}

- (void)tearDown
{
    // Put teardown code here. This method is called after the invocation of each test method in the class.
    [super tearDown];
}

- (void)testOtherNotSoTrueAsMuchAsFalse
{
    XCTAssertTrue(NO);
}


- (void)testOtherFalse
{
    XCTAssertFalse(NO);
}

- (void)testOtherTrue
{
    XCTAssertTrue(YES);
}

@end
